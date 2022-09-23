<?php
/*
Plugin Name: Adit SEO
Plugin URI:  https://adit.com
Description: Adit SEO Plugin
Version:     1.2.0
Author:      https://adit.com
Author URI:  https://adit.com
Text Domain: adit
Domain Path: /languages
License:     GPL2

*/

if ( !class_exists( 'Adit_SEO_Plugin' ) ) {
    class Adit_SEO_Plugin
    {
        public static function init() {
			load_plugin_textdomain( 'adit', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
			add_action('add_meta_boxes', ['Adit_SEO_Plugin', 'add_schema_field']);
			add_action('save_post', ['Adit_SEO_Plugin', 'save_schema_field']);
			add_action('wp_head', ['Adit_SEO_Plugin', 'add_to_wphead'],999);
			add_action( 'admin_enqueue_scripts', ['Adit_SEO_Plugin', 'adit_enqueue_admin_script']);
			add_filter('plugins_api', ['Adit_SEO_Plugin','adit_seo_plugin_info'], 20, 3);
			//add_filter('site_transient_update_plugins', ['Adit_SEO_Plugin','adit_seo_push_update'] );
			//add_action( 'upgrader_process_complete', ['Adit_SEO_Plugin','adit_seo_after_update'], 10, 2 );
        }
 
        public static function add_schema_field()
		{
			$screens = ['post', 'page', 'service' , 'doctor' , 'staff' ,'team' ,'career' ,'locations' , 'landing'];
			foreach ($screens as $screen) {
				add_meta_box(
					'schema_box_id',          // Unique ID
					'Schema', // Box title
					[self::class, 'schema_field'],   // Content callback, must be of type callable
					$screen                  // Post type that we require to add
				);
			}
		}
	
		public static function save_schema_field($post_id)
		{
			if (array_key_exists('schema_field', $_POST)) {
				update_post_meta(
					$post_id,
					'schema_field',
					$_POST['schema_field']
				);
			}
		}
	
		public static function schema_field($post)
		{
			$value = get_post_meta($post->ID, 'schema_field', true);
			?>
			<label class="label-schema" for="schema_field">For Schema Field</label>
			<textarea name="schema_field" id="schema_field" class="schemabox"><?php echo @$value;?></textarea>
			<?php
		}

		public static function add_to_wphead()
		{
			global $post;
			$value = get_post_meta($post->ID, 'schema_field', true);
			if(isset($value)){
				echo $value;
			}
		}

		public static function adit_enqueue_admin_script()
		{
			wp_enqueue_style('adit_css', plugins_url('admin/css/admin_css.css',__FILE__ ));
		}


		/*
		* $res empty at this step
		* $action 'plugin_information'
		* $args stdClass Object ( [slug] => woocommerce [is_ssl] => [fields] => Array ( [banners] => 1 [reviews] => 1 [downloaded] => [active_installs] => 1 ) [per_page] => 24 [locale] => en_US )
		*/
		public static function adit_seo_plugin_info( $res, $action, $args ){
		
			// do nothing if this is not about getting plugin information
			if( 'plugin_information' !== $action ) {
				return false;
			}
		
			$plugin_slug = 'adit-seo'; // we are going to use it in many places in this function
		
			// do nothing if it is not our plugin
			if( $plugin_slug !== $args->slug ) {
				return false;
			}
		
			// trying to get from cache first
			if( false == $remote = get_transient( 'adit_seo_update_' . $plugin_slug ) ) {
		
				// info.json is the file with the actual plugin information on your server
				$remote = wp_remote_get( 'https://enfolytics.com/info.json', array(
					'timeout' => 10,
					'headers' => array(
						'Accept' => 'application/json'
					) )
				);
		
				if ( ! is_wp_error( $remote ) && isset( $remote['response']['code'] ) && $remote['response']['code'] == 200 && ! empty( $remote['body'] ) ) {
					set_transient( 'adit_seo_update_' . $plugin_slug, $remote, 43200 ); // 12 hours cache
				}
		
			}
		
			if( ! is_wp_error( $remote ) && isset( $remote['response']['code'] ) && $remote['response']['code'] == 200 && ! empty( $remote['body'] ) ) {
		
				$remote = json_decode( $remote['body'] );
				$res = new stdClass();
		
				$res->name = $remote->name;
				$res->slug = $plugin_slug;
				$res->version = $remote->version;
				$res->tested = $remote->tested;
				$res->requires = $remote->requires;
				$res->author = '<a href="https://adit.com">Adit</a>';
				$res->author_profile = 'https://adit.com';
				$res->download_link = $remote->download_url;
				$res->trunk = $remote->download_url;
				$res->requires_php = '5.3';
				$res->last_updated = $remote->last_updated;
				$res->sections = array(
					'description' => $remote->sections->description,
					'installation' => $remote->sections->installation,
					'changelog' => $remote->sections->changelog
					// you can add your custom sections (tabs) here
				);
		
				// in case you want the screenshots tab, use the following HTML format for its content:
				// <ol><li><a href="IMG_URL" target="_blank"><img src="IMG_URL" alt="CAPTION" /></a><p>CAPTION</p></li></ol>
				if( !empty( $remote->sections->screenshots ) ) {
					$res->sections['screenshots'] = $remote->sections->screenshots;
				}
		
				$res->banners = array(
					'low' => 'https://cdn1.adit.com/wp-content/uploads/2019/01/innovation-drives-us-150x150.png',
					'high' => 'https://cdn1.adit.com/wp-content/uploads/2019/01/innovation-drives-us.png'
				);
				return $res;
		
			}
		
			return false;
		
		}

		public static function adit_seo_push_update( $transient ){
 
			if ( empty($transient->checked ) ) {
					return $transient;
				}
		 
			// trying to get from cache first, to disable cache comment 10,20,21,22,24
			if( false == $remote = get_transient( 'adit_seo_upgrade_adit_seo' ) ) {
		 
				// info.json is the file with the actual plugin information on your server
				$remote = wp_remote_get( 'https://enfolytics.com/info.json', array(
					'timeout' => 10,
					'headers' => array(
						'Accept' => 'application/json'
					) )
				);
		 
				if ( !is_wp_error( $remote ) && isset( $remote['response']['code'] ) && $remote['response']['code'] == 200 && !empty( $remote['body'] ) ) {
					set_transient( 'adit_seo_upgrade_adit_seo', $remote, 43200 ); // 12 hours cache
				}
		 
			}
		 
			if( $remote ) {
		 
				$remote = json_decode( $remote['body'] );
		 
				// your installed plugin version should be on the line below! You can obtain it dynamically of course 
				if( $remote && version_compare( '1.2.0', $remote->version, '<' ) && version_compare($remote->requires, get_bloginfo('version'), '<' ) ) {
					$res = new stdClass();
					$res->slug = 'adit-seo';
					$res->plugin = 'adit-seo/adit-seo.php'; // it could be just YOUR_PLUGIN_SLUG.php if your plugin doesn't have its own directory
					$res->new_version = $remote->version;
					$res->tested = $remote->tested;
					$res->package = $remote->download_url;
						   $transient->response[$res->plugin] = $res;
						   //$transient->checked[$res->plugin] = $remote->version;
					   }
		 
			}
				return $transient;
		}

		public static function adit_seo_after_update( $upgrader_object, $options ) {
			if ( $options['action'] == 'update' && $options['type'] === 'plugin' )  {
				// just clean the cache when new plugin version is installed
				delete_transient( 'adit_seo_upgrade_adit_seo' );
			}
		}


		
    }
 
    Adit_SEO_Plugin::init();    
}
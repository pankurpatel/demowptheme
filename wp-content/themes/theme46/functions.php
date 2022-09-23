<?php
/**
 * theme45 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme46
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theme46_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on theme46, use a find and replace
		* to change 'theme46' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'theme46', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );
	add_image_size('home-banner', 653, 653, true);
    add_image_size('home-about-image', 623, 623, true);
    add_image_size('home-adv-image', 634, 748, true);
	add_image_size('inner-page-banner', 1920, 600, true);
	add_image_size('lol-gallery-thumb', 416, 360, true);
	add_image_size('home-service-thumb', 325, 278, true);
	add_image_size('hmgallery-large-thumb', 1296, 518, true);
	add_image_size('hmgallery-small-thumb', 416, 166, true);
	add_image_size('content-thumb', 552, 514, true);
	add_image_size('gallery-thumb', 416, 244, true);
	add_image_size('home-review-thumb', 948, 742, true);
	add_image_size('before-after-thumb', 636, 295, true);
	add_image_size('bfaf-thumb', 636, 295, true);



	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'top-menu' => __( 'Top Menu', 'theme46' ),
			'landing-header-menu'    => __( 'Landing Header Menu', 'theme46'),
			'landing-footer-about-us-menu'    => __( 'Landing Footer About Us Menu', 'theme46'),
			'landing-footer-services-menu'    => __( 'Landing Footer Services Menu', 'theme46'),
			'about-us-menu'    => __( 'About Us Menu', 'theme46'),
			'services-menu'    => __( 'Services Menu', 'theme46')
			
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'theme46_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'theme46_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme46_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theme46_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme46_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme46_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'theme46' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theme46' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'theme46_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme46_scripts() {
	wp_enqueue_style( 'theme46-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'theme46-style', 'rtl', 'replace' );
	wp_enqueue_style('theme46-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('theme46-function-css', get_template_directory_uri() . '/css/function.css');

	wp_enqueue_style('theme46-style-css', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('theme46-responsive-css', get_template_directory_uri() . '/css/responsive.css');

	/*scripts register*/
	wp_enqueue_script( 'jquery' );
	//wp_enqueue_script( 'theme46-jquery-min', get_template_directory_uri() .'/js/jquery.min.js', array(),null,true  );

	wp_enqueue_script( 'theme46-bootstrap', get_template_directory_uri() .'/js/bootstrap.js', array(),null,true  );
	wp_enqueue_script( 'theme46-function', get_template_directory_uri() .'/js/function.js',array(),null,true  );
	wp_enqueue_script( 'theme46-general', get_template_directory_uri() .'/js/general.js', array(),null,true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme46_scripts' );


if( function_exists('acf_add_options_page') ) 
{
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Theme Settings','theme46'),
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));
    $option_page = acf_add_options_page(array(
        'page_title'    => __('SEO Marketing','theme46'),
        'menu_title'    => 'SEO Marketing',
        'menu_slug'     => 'seo-marketing',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Adit Web Form','theme46'),
        'menu_title'    => 'Adit Web Form',
        'menu_slug'     => 'adit-web-form',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));
}
add_action('acf/register_fields', 'register_fields');
function register_fields()
{
    include_once('acf-image-select/acf-image-select.php');
}
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyBO_XuiQxVOuBXX76byrIjxO8lILPDkdlw');
}
add_action('acf/init', 'my_acf_init');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function generate_options_css() {
    
	$screen = get_current_screen();
	$ss_dir = get_stylesheet_directory();
    ob_start(); // Capture all output into buffer
    require($ss_dir . '/inc/custom-styles.php'); // Grab the custom-style.php file
    $css = ob_get_clean(); // Store output in a variable, then flush the buffer
    file_put_contents($ss_dir . '/css/color/custom-styles.css', $css, LOCK_EX); // Save it as a css file
}
add_action( 'acf/save_post', 'generate_options_css', 20 ); //Parse the output and write the CSS file on post save





function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more_link($more){
  return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more_link');


function add_rewrite_rules( $wp_rewrite )
{
    $new_rules = array(
        'blog/(.+?)/?$' => 'index.php?post_type=post&name='. $wp_rewrite->preg_index(1),
    );

    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'add_rewrite_rules'); 

function change_blog_links($post_link, $id=0){

    $post = get_post($id);

    if( is_object($post) && $post->post_type == 'post'){
        return home_url('/blog/'. $post->post_name.'/');
    }

    return $post_link;
}
add_filter('post_link', 'change_blog_links', 1, 3);



/******  Font Style ********/
function font_style(){
	$font_settings = get_field('custom_typography_settings','option');
	$body_font = strtolower($font_settings['body_font']."bodyfont");
	$header_font = strtolower($font_settings['heading_font']."headingfont");
	$bodyfont = strtolower($font_settings['body_font']);
	$headingfont = strtolower($font_settings['heading_font']);
	if($bodyfont == $headingfont && !empty($bodyfont) && !empty($headingfont)){
	$bodyfontstyle = $bodyfont.".css"; 	
	wp_enqueue_style( $bodyfont, get_stylesheet_directory_uri() . '/css/typography/'.$bodyfontstyle , array(), false );	
	}
	else
	{
		$bodyfont = strtolower($font_settings['body_font']);
		$headingfont = strtolower($font_settings['heading_font']);
		if(!empty($font_settings['body_font'])){
			wp_enqueue_style( $bodyfont, get_stylesheet_directory_uri() . '/css/typography/'.$bodyfontstyle , array(), false );	
		}
		if(!empty($font_settings['heading_font'])){
			$headingfontstyle = $headingfont.".css";
			wp_enqueue_style( $headingfont, get_stylesheet_directory_uri() . '/css/typography/'.$headingfontstyle , array(), false );
		}		
	} 
}  
add_action( 'wp_enqueue_scripts', 'font_style' );

/******  Font Style ********/ 

function generate_dynamic_sitemap() 
{
    if ( str_replace( '-', '', get_option( 'gmt_offset' ) ) < 10 ) 
    { 
        $tempo = '-0' . str_replace( '-', '', get_option( 'gmt_offset' ) ); 
    } else 
    { 
        $tempo = get_option( 'gmt_offset' ); 
    }
    if( strlen( $tempo ) == 3 ) { $tempo = $tempo . ':00'; }
    $postsForSitemap = get_posts( array(
        'numberposts' => -1,
        'orderby'     => 'modified',
        'post_type'   => array( 'post', 'page', 'service', 'team',  'doctor', 'landing', 'location' ),
        'order'       => 'DESC',
        'exclude' => array(125),
    ) );
    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' ;
    $sitemap .= "\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n"; 
     $sitemap .= "\t" . '<url>' . "\n" .
            "\t\t" . '<loc>' . esc_url( home_url( '/' ) ) . '</loc>' .
            //"\n\t\t" . '<lastmod>' . date( "Y-m-d\TH:i:s", current_time( 'timestamp', 0 ) ) . $tempo . '</lastmod>' .
            "\n\t\t" . '<changefreq>weekly</changefreq>' .
            "\n\t\t" . '<priority>1.00</priority>' .
            "\n\t" . '</url>' . "\n";
    foreach( $postsForSitemap as $post ) 
    {
        if ( get_post_type($post) == 'service' ) 
        {
            $priority = '0.80';
        }
        elseif ( get_post_type($post) == 'post' || 
                get_post_type($post) == 'page' || 
                get_post_type($post) == 'doctor' || 
                get_post_type($post) == 'team' || 
                get_post_type($post) == 'landing' || 
                get_post_type($post) == 'location' 
                )
            {
               $priority = '0.60';
            }
        setup_postdata( $post );   
        $postdate = explode( " ", $post->post_modified );   
        $sitemap .= "\t" . '<url>' . "\n" .
            "\t\t" . '<loc>' . get_permalink( $post->ID ) . '</loc>' .
            //"\n\t\t" . '<lastmod>' . $postdate[0] . '</lastmod>' .
            "\n\t\t" . '<changefreq>weekly</changefreq>' .
            "\n\t\t" . '<priority>'.$priority.'</priority>' .
            "\n\t" . '</url>' . "\n";
    }
    $sitemap .= '</urlset>'; 
    $fp = fopen( ABSPATH . "sitemap.xml", 'w' );
    fwrite( $fp, $sitemap );
    fclose( $fp );
}
add_action( "save_post", "generate_dynamic_sitemap" ); 
/*****~~~!~~~ END: SITEMAP CODE ~~~!~~~*****/

function print_menu_shortcode($atts, $content = null) {
extract(shortcode_atts(array( 'name' => null, 'class' => null ), $atts));
return wp_nav_menu( array( 'menu' => $name, 'menu_class' =>'nav' , 'menu_id' => 'nav', 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');

function print_footmenu_shortcode($atts, $content = null) {
extract(shortcode_atts(array( 'name' => null, 'class' => null ), $atts));
return wp_nav_menu( array( 'menu' => $name, 'menu_class' => $class, 'echo' => false ) );
}
add_shortcode('footmenu', 'print_footmenu_shortcode');


function w3reign_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'w3reign_svg_mime_type' );
function add_svg_to_upload_mimes( $upload_mimes ) {
	$upload_mimes['svg'] = 'image/svg+xml';
	$upload_mimes['svgz'] = 'image/svg+xml';
	return $upload_mimes;
}
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes', 10, 1 );
 
/* function to create sitemap.xml file in root directory of site  */        

add_action( "save_post", "generate_dynamic_sitemap" );   
function generate_dynamic_sitemap() 
{
    if ( str_replace( '-', '', get_option( 'gmt_offset' ) ) < 10 ) 
    { 
        $tempo = '-0' . str_replace( '-', '', get_option( 'gmt_offset' ) ); 
    } else 
    { 
        $tempo = get_option( 'gmt_offset' ); 
    }
    if( strlen( $tempo ) == 3 ) { $tempo = $tempo . ':00'; }
    $postsForSitemap = get_posts( array(
        'numberposts' => -1,
        'orderby'     => 'modified',
        'post_type'   => array( 'post', 'page', 'service', 'team', 'doctor', 'case_study', 'portfolio', 'mediapress', 'lawyer', 'staff', 'doctors', 'events_media', 'career', 'calendar', 'programs', 'newsandevents', 'testimonial' ),
        'order'       => 'DESC',
        'exclude' => array( 3207,12052,8670,1259,1503,2480 ),
    ) );

    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' ;
    $sitemap .= "\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n"; 
     
     $sitemap .= "\t" . '<url>' . "\n" .
            "\t\t" . '<loc>' . esc_url( home_url( '/' ) ) . '</loc>' .
            //"\n\t\t" . '<lastmod>' . date( "Y-m-d\TH:i:s", current_time( 'timestamp', 0 ) ) . $tempo . '</lastmod>' .
            "\n\t\t" . '<changefreq>weekly</changefreq>' .
            "\n\t\t" . '<priority>1.00</priority>' .
            "\n\t" . '</url>' . "\n";

            
            
    foreach( $postsForSitemap as $post ) 
    {
        if ( get_post_type($post) == 'service' ) 
        {
            $priority = '0.80';
        }
        elseif ( get_post_type($post) == 'post' || 
                get_post_type($post) == 'page' || 
                get_post_type($post) == 'team' || 
                get_post_type($post) == 'doctor' || 
                get_post_type($post) == 'case_study' || 
                get_post_type($post) == 'portfolio' || 
                get_post_type($post) == 'mediapress' || 
                get_post_type($post) == 'lawyer' || 
                get_post_type($post) == 'staff' || 
                get_post_type($post) == 'doctors' || 
                get_post_type($post) == 'events_media' || 
                get_post_type($post) == 'career' || 
                get_post_type($post) == 'calendar' || 
                get_post_type($post) == 'programs' || 
                get_post_type($post) == 'newsandevents' || 
                get_post_type($post) == 'testimonial' )
            {
               $priority = '0.60';
            }
        setup_postdata( $post );   
        $postdate = explode( " ", $post->post_modified );   
        $sitemap .= "\t" . '<url>' . "\n" .
            "\t\t" . '<loc>' . get_permalink( $post->ID ) . '</loc>' .
            //"\n\t\t" . '<lastmod>' . $postdate[0] . '</lastmod>' .
            "\n\t\t" . '<changefreq>weekly</changefreq>' .
            "\n\t\t" . '<priority>'.$priority.'</priority>' .
            "\n\t" . '</url>' . "\n";
    }

    $sitemap .= '</urlset>'; 
    $fp = fopen( ABSPATH . "sitemap.xml", 'w' );
    fwrite( $fp, $sitemap );
    fclose( $fp );
}
/*****~~~!~~~ END: SITEMAP CODE ~~~!~~~*****/


/**** Redirection Plugin Editor access ****/
add_filter( 'redirection_role', 'redirection_to_editor' );
function redirection_to_editor() {
    return 'edit_pages';
}

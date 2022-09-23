<?php
   /**
    * The header for our theme
    *
    * This is the template that displays all of the <head><meta http-equiv="Pragma" content="no-cache"><meta http-equiv="Cache-Control" content="no-cache"> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package Theme46
    */
   
   ?>
<?php
   global $logo,$address,$address_link,$phoneno,$social_links,$header_settings,$social_links_title,$header_pages_display_settings,$font_settings,$page_id,$home_banner_bottom_curve,$home_banner_image_after_curve,$home_banner_image_before_curve,$about_us_top_curve,$about_us_bottom_curve,$about_us_image_curve,$services_thumb_curve,$find_ambulance_image_curve,$discount_plans_section_top_curve,$promotion_plans_bottom_curve,$promotion_plans_after_curve,$blog_thumb_curve;
   $page_id=get_the_ID();
   $logo=get_field('logo','option');
   $phoneno=get_field('phone_number','option');
   $address=get_field('address','option');
   $address_link=get_field('address_link','option');
   $social_links=get_field('social_links','option');
   $social_links_title=get_field('social_links_title','option');     
   $header_settings = get_field('header_settings','option');
   $header_pages_display_settings = get_field('header_page_display_settings','option');
   $font_settings = get_field('custom_typography_settings','option');
   $body_font1 = strtolower($font_settings['body_font']);
   if($body_font1){
    $body_font = $body_font1." bodyfont";
   }
   $header_font1 = strtolower($font_settings['heading_font']);
   if($header_font1){
   $header_font = $header_font1." headingfont";
   }
   if(get_field('enable_multiple_locations','option')){
   $multilocation_class = "multilocation";
   }
   ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head><meta http-equiv="Pragma" content="no-cache"><meta http-equiv="Cache-Control" content="no-cache">
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="robots" content="noodp"/>
      
      <meta name="distribution" content="global">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php if (get_field('meta_code','option')): ?>
      <?php echo get_field('meta_code','option'); ?>
      <?php endif; ?>
      <?php wp_head(); ?>
      <?php if (get_field('google_tag_head_code','option')): ?>
      <?php echo get_field('google_tag_head_code','option'); ?>
      <?php endif; ?>
      <?php if (get_field('schema_code','option')): ?>
      <?php echo get_field('schema_code','option'); ?>
      <?php endif; ?>
      <script>
         var $=jQuery;
      </script>

<?php if(have_rows('homepage_content',$page_id)):?>
<?php while(have_rows('homepage_content',$page_id)):the_row();?>
   <?php if(get_row_layout() == 'banner'):?>
      <?php  
       $home_banner_bottom_curve=get_sub_field('home_banner_bottom_curve')['url'];
       $home_banner_image_after_curve=get_sub_field('home_banner_image_after_curve')['url'];
       $home_banner_image_before_curve=get_sub_field('home_banner_image_before_curve')['url'];
      ?>
<?php elseif(get_row_layout() == 'about_us'):?>
      <?php  
       $about_us_top_curve=get_sub_field('about_us_top_curve')['url'];
       $about_us_bottom_curve=get_sub_field('about_us_bottom_curve')['url'];
       $about_us_image_curve=get_sub_field('about_us_image_curve')['url'];
      ?>
<?php elseif(get_row_layout() == 'services'):?>
      <?php  
       $services_thumb_curve=get_sub_field('services_thumb_curve')['url'];
       
      ?>
      <?php elseif(get_row_layout() == 'find_ambulance'):?>
      <?php  
       $find_ambulance_image_curve=get_sub_field('find_ambulance_image_curve')['url'];
       
      ?>
            <?php elseif(get_row_layout() == 'discount_plans'):?>
      <?php  
       $discount_plans_section_top_curve=get_sub_field('discount_plans_section_top_curve')['url'];
       
      ?>
            <?php elseif(get_row_layout() == 'promotion_plans'):?>
      <?php  
       $promotion_plans_bottom_curve=get_sub_field('promotion_plans_bottom_curve')['url'];
        $promotion_plans_after_curve=get_sub_field('promotion_plans_after_curve')['url'];

      ?>
 <?php elseif(get_row_layout() == 'blog'):?>
      <?php  
       $blog_thumb_curve=get_sub_field('blog_thumb_curve')['url'];

      ?>
   <?php endif;?>
<?php endwhile;?> 
<?php endif;?>
<style type="text/css">


.hmbanner-section:after {background-image: url(<?php echo $home_banner_bottom_curve;?>);}

.hmbanner-img:after {background-image: url(<?php echo $home_banner_image_after_curve;?>);}

.hmbanner-img:before {background-image: url(<?php echo $home_banner_image_before_curve;?>);}

.hmaboutsection:before {background-image: url(<?php echo $about_us_top_curve;?>);}

.hmaboutsection:after {background-image: url(<?php echo $about_us_bottom_curve;?>);}

.hmabout-image:after {background-image: url(<?php echo $about_us_image_curve;?>);}

.hmservice-thumb:after {background-image: url(<?php echo $services_thumb_curve;?>);}

.hmfindambulance-img:before, .hmfindambulance-img:after {background-image: url(<?php echo $find_ambulance_image_curve;?>);}

.hmdiscplan-section:before {background-image: url(<?php  echo $discount_plans_section_top_curve;?>);}

.hmpromoplan-section:after {background-image: url(<?php  echo $promotion_plans_bottom_curve;?>);}

.hmpromosbox:after {background-image: url(<?php  echo $promotion_plans_after_curve;?>);}

.hmblogthumb:after {background-image: url(<?php  echo $blog_thumb_curve;?>);}

</style>
      
      <link type="text/css" href="<?php bloginfo('template_directory');?>/css/color/custom-styles.css" rel="stylesheet" />
      <?php if(!empty(get_field('custom_css','option'))):?>
      <style type="text/css">
         <?php echo get_field('custom_css','option'); ?>
      </style>
      <?php endif; ?>
      <?php if(!empty(get_field('mobile_responsive_css','option'))):?>
      <style type="text/css">
         <?php echo get_field('mobile_responsive_css','option'); ?>
      </style>
      <?php endif; ?>
   </head>
   <?php 
      $custombodyclass = get_field('custom_body_class','option'); 
      $bodyclass = $custombodyclass." ".$multilocation_class." ".$body_font." ".$header_font." ".str_replace('/','',get_blog_details( get_current_blog_id() )->path);
      ?>
   <body <?php body_class($bodyclass); ?>>
      <?php if (get_field('google_tag_body_code','option')): ?>
      <?php echo get_field('google_tag_body_code','option'); ?>
      <?php endif; ?>
      <div id="wrapper">
      <?php if(($header_settings['custom_header_enable_disable']) && ($header_settings['custom_header_editor'])):?>
      <?php echo $header_settings['custom_header_editor']; ?>
      <?php else :?>
      <header id="header">
         <?php if(get_field('enable_multiple_locations','option')):?>
         <?php
            $multiple_locations_header_footer = get_field('multiple_location_header_footer','option');
            $enable_header_multi_find_location_bar = $multiple_locations_header_footer['enable_header_multi_find_location_bar'];
            $multi_location_header_short_code = $multiple_locations_header_footer['multi_location_header_short_code'];
            $multi_location_header_short_code_title = $multiple_locations_header_footer['multi_location_header_short_code_title'];
            $multi_location_header_short_code_sub_title = $multiple_locations_header_footer['multi_location_header_short_code_sub_title'];
            $multi_location_header_background_color = $multiple_locations_header_footer['multi_location_header_background_color'];
            $multi_location_header_background_image = $multiple_locations_header_footer['multi_location_header_background_image']['url'];
            ?>
         <?php if(!empty($enable_header_multi_find_location_bar)): ?>
         <?php if((!is_singular('location')) && (!is_page_template('template-parts/template-find-locations.php'))): ?>
         <?php $style=$backcolor=$backimg='';?>
         <?php if($multi_location_header_background_color):?>
         <?php $backcolor = 'background-color:'.$multi_location_header_background_color.';';?>
         <?php endif; ?>
         <?php if($multi_location_header_background_image):?>
         <?php $backimg = 'background-image:url('.$multi_location_header_background_image.');';?>
         <?php endif; ?>
         <?php if(($multi_location_header_background_color) || ($multi_location_header_background_image)): ?>
         <?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
         <?php endif;?>
         <div class="headfindloc-bar">
            <div class="container">
               <div class="headfindloc-block">
                  <?php if($multi_location_header_short_code_title): ?>
                  <div class="findloc-text"><?php echo $multi_location_header_short_code_title; ?></div>
                  <?php endif;?>  
                  <div class="findlocsearch-box">
                     <div class="findlocsearch-bar">
                        <?php echo do_shortcode($multi_location_header_short_code); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php endif;?>
         <?php endif;?>
         <?php endif;?>
         <div class="header-inner">
            <div class="container">
               <div class="headermain">
                  <?php if($logo):?>
                  <div id="logo">
                     <a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo bloginfo('name'); ?>">
                     <img src="<?php echo $logo['url'];?>" alt="<?php echo bloginfo('name'); ?>" width="198" height="49" />
                     </a>
                  </div>
                  <?php endif;?>
                  <div class="headtop-right">
                     <?php if(get_field('enable_multiple_locations','option')):?>
                     <?php
                        $multiple_locations_header_footer = get_field('multiple_location_header_footer','option');
                        $multi_find_location_dropdown_enable = $multiple_locations_header_footer['multi_find_location_dropdown_enable'];
                        $multi_location_header_title = $multiple_locations_header_footer['multi_location_header_title'];
                        $multi_find_location_link = $multiple_locations_header_footer['multi_find_location_link'];
                        ?>
                     <?php if(!empty($multi_find_location_dropdown_enable)): ?>
                     <div class="headfindloc">
                        <?php if($multi_location_header_title):?>
                        <a class="headfindlocbtn button" href="<?php echo $multi_find_location_link; ?>"><?php echo $multi_location_header_title; ?></a>
                        <?php endif;?>
                        <ul class="location_list">
                           <?php $loop = new WP_Query( array( 'post_type' => 'location', 'posts_per_page' => -1 ) ); ?>
                           <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                           <?php
                              $location_link = get_permalink();
                              $location_title = get_field('title');
                              $location_phone = get_field('phone_number');
                              ?>
                           <li>
                              <a href="<?php echo $location_link; ?>"><?php echo $location_title; ?></a>
                              - <a href="tel:<?php echo $location_phone; ?>"><?php echo $location_phone; ?></a>
                           </li>
                           <?php endwhile;
                              wp_reset_query();
                              ?>
                        </ul>
                     </div>
                     <?php endif;?>
                     <?php endif;?> 
                     <?php if(get_field('enable_single_location','option')):?>               
                     <?php if(($address) && ($header_pages_display_settings['enable_header_address'])):?>
                     <div class="head-location">
                        <a href="<?php echo $address_link;?>" target="_blank"><?php echo $address; ?></a>
                     </div>
                     <?php endif;?>
                     <?php if(($phoneno) && ($header_pages_display_settings['enable_header_phone'])):?>
                     <div class="head-phone">
                        <a href="tel:<?php echo $phoneno; ?>"><?php echo $phoneno; ?></a>
                     </div>
                     <?php endif;?>
                     <?php if(($social_links) && ($header_pages_display_settings['enable_header_social_icons'])):?>
                     <div class="headsocial">
                        <ul class="socialmedia">
                           <?php foreach ($social_links as $soc_val):?>
                           <li><a href="<?php echo $soc_val['social_link_url'];?>" target="_blank" title="<?php echo $soc_val['social_link_title'];?>"><i class="<?php echo $soc_val['social_icon_class'];?>"></i></a></li>
                           <?php endforeach;?>
                        </ul>
                     </div>
                     <?php endif;?>
                     <?php endif;?>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-menubar">
            <div class="container">
               <div class="header-menu">
                  <div id="nav-icon">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
                  <nav id="mainNav">
                     <?php wp_nav_menu(array('menu' => 'Top Menu','menu_id' => 'nav','menu_class' =>'nav'));?>
                  </nav>
                  <?php if($header_pages_display_settings['enable_header_book_an_appointment']):?>
                  <div class="headbook-btn">
                     <?php if(($header_settings['header_custom_book_appointment_button_link_enable']) && ($header_settings['header_custom_book_appointment_button_link'])):?>
                     <a class="border-btn" href="<?php echo $header_settings['header_custom_book_appointment_button_link']; ?>"><?php echo $header_settings['header_book_appointment_button_text']; ?></a>
                     <?php elseif(($header_settings['header_book_appointment_button_text']) && ($header_settings['header_book_appointment_button_link'])):?>
                     <a class="border-btn" href="<?php echo $header_settings['header_book_appointment_button_link']; ?>"><?php echo $header_settings['header_book_appointment_button_text']; ?></a>
                     <?php endif;?>
                  </div>
                  <?php endif;?>
               </div>
            </div>
         </div>
      </header>
      <?php endif;?>
      <div id="container">
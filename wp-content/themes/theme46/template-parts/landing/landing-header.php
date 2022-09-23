<?php
   /**
    * The header for our theme
    *
    * This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package Theme46
    */
   
   ?>
<?php
   global $logo,$address,$address_link,$phoneno,$social_links,$header_settings,$social_links_title,$header_pages_display_settings,$font_settings,$page_id,$home_banner_bottom_curve,$home_banner_image_after_curve,$home_banner_image_before_curve,$about_us_top_curve,$about_us_bottom_curve,$about_us_image_curve,$services_thumb_curve,$find_ambulance_image_curve,$discount_plans_section_top_curve,$promotion_plans_bottom_curve,$promotion_plans_after_curve,$blog_thumb_curve;
   $page_id=get_the_ID();
   $generalcontent=get_field('general_content');
  $logo=$generalcontent['logo'];
  $address=$generalcontent['address'];
  $address_link=$generalcontent['address_link'];
  $phoneno=$generalcontent['phone_number'];
  $logo_link=$generalcontent['logo_link_enable_disable'];
  $social_links_title=$generalcontent['social_links_title'];
  $socials_link_list=$generalcontent['social_links'];
  $header_bgcolor=$generalcontent['header_bg_color'];
  $header_bgimg=$generalcontent['header_bg_image']['url'];
  $menubook = $generalcontent['enable_disable_landing_header_menu'];   
  $header_settings = get_field('header_settings','option');
  $font_settings = get_field('custom_typography_settings','option');
  $body_font1 = strtolower($font_settings['body_font']);
  if($body_font1){
   $body_font = $body_font1." bodyfont";
  }
  $header_font1 = strtolower($font_settings['heading_font']);
  if($header_font1){
    $header_font = $header_font1." headingfont";
  }
  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="robots" content="noodp"/>
      <meta name="robots" content="noindex, nofollow">
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
      <?php $current_site_id = get_current_blog_id(); ?>
      <link type="text/css" href="<?php bloginfo('template_directory');?>/css/color/custom-styles-<?=$current_site_id?>.css" rel="stylesheet" />
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
    $landing_layout=explode(":",get_field('select_landing_page_layout'));
    $layout = $landing_layout[0];
    if($layout==1){
      $landingclass="landinglayout1";
    }
    elseif($layout==2){
      $landingclass="landinglayout2";
    }
    elseif($layout==3){
      $landingclass="landinglayout3";
    }
    elseif($layout==4){
      $landingclass="landinglayout4";
    }
    elseif($layout==5){
      $landingclass="landinglayout5";
    } 
    ?>
   <?php 
      $custombodyclass = get_field('custom_body_class','option'); 
      $bodyclass = $custombodyclass." ".$landingclass." ".$body_font." ".$header_font." ".str_replace('/','',get_blog_details( get_current_blog_id() )->path);
      ?>
   <body <?php body_class($bodyclass); ?>>
      <?php if (get_field('google_tag_body_code','option')): ?>
      <?php echo get_field('google_tag_body_code','option'); ?>
      <?php endif; ?>
      <div id="wrapper">
     <?php $style=$backcolor=$backimg='';?>
    <?php if($header_bgcolor):?>
    <?php $backcolor = 'background-color:'.$header_bgcolor.';';?>
    <?php endif; ?>
    <?php if($header_bgimg):?>
    <?php $backimg = 'background-image:url('.$header_bgimg.');';?>
    <?php endif; ?>
    <?php if(($header_bgcolor) || ($header_bgimg)): ?>
    <?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
    <?php endif;?>
      <header id="header" <?php echo $style;?>>
        
         <div class="header-inner">
            <div class="container">
               <div class="headermain">
                  <?php if($logo):?>
                  <div id="logo">
                     <?php if($logo_link):?>
                     <a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo bloginfo('name'); ?>">
                     <img src="<?php echo $logo['url'];?>" alt="<?php echo bloginfo('name'); ?>" width="198" height="49" />
                     </a>
                  <?php else:?>
                   <img src="<?php echo $logo['url'];?>" alt="<?php echo bloginfo('name'); ?>" width="198" height="49" />
                  <?php endif;?>
                  </div>
                  <?php endif;?>
                  <div class="headtop-right">
                    
                     <?php if(($address) && ($generalcontent['enable_header_address'])): ?>
                     <div class="head-location">
                        <a href="<?php echo $address_link;?>" target="_blank"><?php echo $address; ?></a>
                     </div>
                     <?php endif;?>
                    <?php if(($phoneno) && ($generalcontent['enable_header_phone'])): ?>
                     <div class="head-phone">
                        <a href="tel:<?php echo $phoneno; ?>"><?php echo $phoneno; ?></a>
                     </div>
                     <?php endif;?>
                  <?php if(($socials_link_list) && ($generalcontent['enable_header_social_icons'])):?>
                     <div class="headsocial">
                        <ul class="socialmedia">
                           <?php foreach ($socials_link_list as $soc_val):?>
                           <li><a href="<?php echo $soc_val['social_link_url'];?>" target="_blank" title="<?php echo $soc_val['social_link_title'];?>"><i class="<?php echo $soc_val['social_link_icon_class'];?>"></i></a></li>
                           <?php endforeach;?>
                        </ul>
                     </div>
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
                     <?php if($generalcontent['select_landing_header_menu'])
                       {
                        $short_code = $generalcontent['select_landing_header_menu'];
                        echo do_shortcode($short_code); 
                         }
                        ?>
                  </nav>
                     <?php if($generalcontent['enable_header_book_an_appointment']):?>
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
      <div id="container">
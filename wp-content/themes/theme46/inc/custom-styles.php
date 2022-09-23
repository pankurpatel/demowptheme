<?php
global $body_style,$header_style,$menu_style,$footer_form_section_style,$header_settings,$footer_settings,$footer_background_color,$footer_style,$extra_color_style,$calendar_style,$body_text_color,$body_background_color,$body_background_image,$header_background_color,$header_background_image,$menu_background_color,$menu_text_hover_color,$menu_text_color,$menu_background_image,$menu_dropdown_background_color,$menu_dropdown_text_color,$menu_dropdown_hover_background_color,$menu_dropdown_hover_text_color,$footer_form_section_background_color,$footer_form_section_background_image,$footer_color,$footer_background_image_url,$primary_color,$secondary_color,$tertiary_color,$light_gray_color,$light_text_color,$dark_text_color,$calendar_background_color,$calendar_head_background_color,$calendar_body_color,$header_address_color,$header_phone_color,$header_address_hover_color,$header_phone_hover_color,$calendar_today_date_background_color,$menu_responsive_color,$menu_responsive_hover_color,$review_background_color,$title_bottom_image_1,$inner_pages_banner_background_color,$form_date_picker_background_color,$form_date_picker_selected_date_background,$form_preferred_time_dropdown_background_color,$form_selected_preferred_time_dropdown_background_color,$background_circles_shapes_image,$multiple_location_header_footer,$footer_promotion_section,$footer_promotion_plan_after_shape_curve,$location_image_curve,$location_map_bottom_curve,$location_gallery_thumb_curve,$footer_map_bottom_shape,$inner_page_banner_bottom_shape,$blog_image_curve,$promotion_plans_box_after_curve,$how_it_works_steps_curve,$your_first_visit_image_thumb_curve,$doctors_team_thumb_curve,$doctor_details_thumb_after_curve,$services_promotion_plans,$services_discount_plans,$discount_plans_section_top_curve,$promotion_plans_bottom_curve,$promotion_plans_after_curve,$other_services_thumb_curve,$service_banner_slider_bottom_curve,$service_banner_slider_image_after_curve,$service_banner_slider_image_before_curve,$client_thumb_curve;
$frontpage_id = get_option('page_on_front');
$body_style = get_field('body_style','option');
$header_style = get_field('header_style','option');
$menu_style = get_field('menu_style','option');
$footer_form_section_style = get_field('footer_form_section_style','option');
$footer_style = get_field('footer_style','option');
$extra_color_style = get_field('extra_color_style','option');
$review_background_color = get_field('review_background_color','option');
$calendar_style = get_field('calendar_style','option');
$body_text_color = $body_style['body_text_color'];
$body_background_color = $body_style['body_background_color'];
$body_background_image = $body_style['body_background_image']['url'];
$header_background_color = $header_style['header_background_color'];
$header_background_image = $header_style['header_background_image']['url'];
$header_address_color = $header_style['header_address_color'];
$header_phone_color = $header_style['header_phone_color'];
$header_address_hover_color = $header_style['header_address_hover_color'];
$header_phone_hover_color = $header_style['header_phone_hover_color'];
$menu_background_color = $menu_style['menu_background_color'];
$menu_background_image = $menu_style['menu_background_image']['url'];
$menu_text_color = $menu_style['menu_text_color'];
$menu_text_hover_color = $menu_style['menu_text_hover_color'];
$menu_dropdown_background_color = $menu_style['menu_dropdown_background_color'];
$menu_dropdown_text_color = $menu_style['menu_dropdown_text_color'];
$menu_dropdown_hover_background_color = $menu_style['menu_dropdown_hover_background_color'];
$menu_dropdown_hover_text_color = $menu_style['menu_dropdown_hover_text_color'];
$menu_responsive_color = $menu_style['menu_responsive_color'];
$menu_responsive_hover_color = $menu_style['menu_responsive_hover_color'];
$footer_form_section_background_color = $footer_form_section_style['footer_form_section_background_color'];
$footer_form_section_background_image = $footer_form_section_style['footer_form_section_background_image']['url'];
$footer_form_top_pattern = $footer_form_section_style['footer_form_top_pattern']['url'];
$footer_background_color = $footer_style['footer_background_color'];
$footer_background_image = $footer_style['footer_background_image']['url'];
$primary_color = $extra_color_style['primary_color'];
$secondary_color = $extra_color_style['secondary_color'];
$tertiary_color = $extra_color_style['tertiary_color'];
$light_gray_color = $extra_color_style['light_gray_color'];
$light_text_color = $extra_color_style['light_text_color'];
$dark_text_color = $extra_color_style['dark_text_color'];
$calendar_background_color = $calendar_style['calendar_background_color'];
$calendar_head_background_color = $calendar_style['calendar_head_background_color'];
$calendar_body_color = $calendar_style['calendar_body_color'];
$calendar_today_date_background_color = $calendar_style['calendar_today_date_background_color'];
$form_date_picker_background_color=get_field('form_date_picker_background_color','option');
$form_date_picker_selected_date_background=get_field('form_date_picker_selected_date_background','option');
$form_preferred_time_dropdown_background_color=get_field('form_preferred_time_dropdown_background_color','option');
$form_selected_preferred_time_dropdown_background_color=get_field('form_selected_preferred_time_dropdown_background_color','option');
$header_settings=get_field('header_settings','option');
$footer_settings=get_field('footer_settings','option');
$footer_map_bottom_shape=$footer_settings['footer_map_bottom_shape']['url'];

$background_circles_shapes_image=get_field('background_circles_shapes_image','option')['url'];
$multiple_location_header_footer=get_field('multiple_location_header_footer','option');
$footer_promotion_section=$multiple_location_header_footer['footer_promotion_section'];
$footer_promotion_plan_after_shape_curve=$footer_promotion_section['footer_promotion_plan_after_shape_curve']['url'];
$location_image_curve=get_field('location_image_curve','option')['url'];
$location_map_bottom_curve=get_field('location_map_bottom_curve','option')['url'];
$location_gallery_thumb_curve=get_field('location_gallery_thumb_curve','option')['url'];
$inner_page_banner_bottom_shape=get_field('inner_page_banner_bottom_shape','option')['url'];
$doctor_details_thumb_after_curve=get_field('doctor_details_thumb_after_curve','option')['url'];
$services_discount_plans=get_field('services_discount_plans','option');
$services_promotion_plans=get_field('services_promotion_plans','option');
$discount_plans_section_top_curve=$services_discount_plans['discount_plans_section_top_curve']['url'];
$promotion_plans_bottom_curve=$services_promotion_plans['promotion_plans_bottom_curve']['url'];
$promotion_plans_after_curve=$services_promotion_plans['promotion_plans_after_curve']['url'];
$other_services_thumb_curve=get_field('other_services_thumb_curve','option')['url'];
$service_banner_slider_bottom_curve=get_field('service_banner_slider_bottom_curve','option')['url'];
$service_banner_slider_image_after_curve=get_field('service_banner_slider_image_after_curve','option')['url'];
$service_banner_slider_image_before_curve=get_field('service_banner_slider_image_before_curve','option')['url'];
$client_thumb_curve=get_field('client_thumb_curve',1022)['url'];

?>

 <?php if(have_rows('default_contents',1006)):?>
      <?php while(have_rows('default_contents',1006)):the_row();?>
           <?php if(get_row_layout() == 'blog_page'): ?>

<?php $blog_image_curve=get_sub_field('blog_image_curve')['url'];?>
<?php endif;?>
<?php endwhile;?>
<?php endif;?>

 <?php if(have_rows('default_contents',1014)):?>
      <?php while(have_rows('default_contents',1014)):the_row();?>
           <?php if(get_row_layout() == 'promotion_plans_page'): ?>

<?php $promotion_plans_box_after_curve=get_sub_field('promotion_plans_box_after_curve')['url'];?>
<?php endif;?>
<?php endwhile;?>
<?php endif;?>

 <?php if(have_rows('default_contents',1032)):?>
      <?php while(have_rows('default_contents',1032)):the_row();?>
           <?php if(get_row_layout() == 'how_it_works_page'): ?>

<?php $how_it_works_steps_curve=get_sub_field('how_it_works_steps_curve')['url'];?>
<?php endif;?>
<?php endwhile;?>
<?php endif;?>

 <?php if(have_rows('default_contents',1034)):?>
      <?php while(have_rows('default_contents',1034)):the_row();?>
           <?php if(get_row_layout() == 'your_first_visit_page'): ?>

<?php $your_first_visit_image_thumb_curve=get_sub_field('your_first_visit_image_thumb_curve')['url'];?>
<?php endif;?>
<?php endwhile;?>
<?php endif;?>
<?php if(have_rows('default_contents',1026)):?>
      <?php while(have_rows('default_contents',1026)):the_row();?>
           <?php if(get_row_layout() == 'doctors_and_team_page'): ?>

<?php $doctors_team_thumb_curve=get_sub_field('doctors_team_thumb_curve')['url'];?>
<?php endif;?>
<?php endwhile;?>
<?php endif;?>

.circles {background-image: url(<?php echo $background_circles_shapes_image;?>);}

.innerbanner-img:after {background-image: url(<?php echo $inner_page_banner_bottom_shape;?>);}

.page-id-1006 .hmblogthumb:after {background-image: url(<?php  echo $blog_image_curve;?>);}

.howitwork-thumb:after {background-image: url(<?php  echo $how_it_works_steps_curve;?>);}

.drlist-boxthumb:after {background-image: url(<?php  echo $doctors_team_thumb_curve;?>);}

.doctordetail-thumb:after {background-image: url(<?php  echo $doctor_details_thumb_after_curve;?>);}

.reviewbox-thumb:after {background-image: url(<?php  echo $client_thumb_curve;?>);}

.promoslist-row .hmpromosbox:after {background-image: url(<?php echo $promotion_plans_box_after_curve; ?>);}

.firstvisit-thumb:after {background-image: url(<?php echo $your_first_visit_image_thumb_curve; ?>);}

.findlocation-map:after {background-image: url(<?php echo $location_map_bottom_curve; ?>);}

.findlocation-img:after {background-image: url(<?php echo $location_image_curve; ?>);}

.locgallery-thumb:after {background-image: url(<?php echo $location_gallery_thumb_curve; ?>);}

.footmap-block:after {background-image: url(<?php echo $footer_map_bottom_shape; ?>);}

.hmpromosbox:after {background-image: url(<?php  echo $footer_promotion_plan_after_shape_curve;?>);}


.single-service .hmdiscplan-section:before {background-image: url(<?php  echo $discount_plans_section_top_curve;?>);}

.single-service .hmpromoplan-section:after {background-image: url(<?php  echo $promotion_plans_bottom_curve;?>);}

.single-service .hmpromosbox:after {background-image: url(<?php  echo $promotion_plans_after_curve;?>);}

.single-service .hmservice-thumb:after {background-image: url(<?php echo $other_services_thumb_curve;?>);}

.single-service .hmbanner-section:after {background-image: url(<?php echo $service_banner_slider_bottom_curve;?>);}

.single-service .hmbanner-img:after {background-image: url(<?php echo $service_banner_slider_image_after_curve;?>);}

.single-service .hmbanner-img:before {background-image: url(<?php echo $service_banner_slider_image_before_curve;?>);}
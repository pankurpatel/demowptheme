<?php 
   /*
   Template Name:Custom Default Page
   */
   get_header();
   
   global $inner_page_banner_title,$inner_page_banner_image; 
   ?>
<?php global $post;
   $page_slug = $post->post_name;
   ?>
<?php if(have_rows('default_contents')):?>
<?php while(have_rows('default_contents')):the_row();?>
<?php if(get_row_layout() == 'inner_page_banner'): ?>
<?php if((get_sub_field('enable_disable_inner_page_banner')) && (get_sub_field('inner_page_banner_image'))): ?>
<?php 
   $inner_page_banner_image=get_sub_field('inner_page_banner_image');
   $inner_page_banner_title=get_sub_field('inner_page_banner_title'); 
   
   ?>
<?php endif;?>
<?php endif;?>
<?php endwhile;?>
<?php endif;?>
<div class="<?php echo $page_slug."-content" ; ?> <?php if(!$inner_page_banner_image):?> no-banner<?php endif;?>">
<?php if(have_rows('default_contents')):?>
<?php while(have_rows('default_contents')):the_row();?> 
<?php if(get_row_layout() == 'inner_page_banner'): ?>
<?php if((get_sub_field('enable_disable_inner_page_banner')) && (get_sub_field('inner_page_banner_image'))): ?>
<section class="inner-banner" data-aos="fade-down" data-aos-duration="2000">
   <div class="innerbanner-img" style="background-image: url(<?php echo get_sub_field('inner_page_banner_image')['sizes']['inner-page-banner']; ?>);">
      <img src="<?php echo get_sub_field('inner_page_banner_image')['sizes']['inner-page-banner']; ?>" alt="<?php echo get_sub_field('inner_page_banner_title'); ?>" width="1920" height="600" />
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'about_us_page'): ?>
<?php if(get_sub_field('use_about_us')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('about_us_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('about_us_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('about_us_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('about_us_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('about_us_background_color')) || (get_sub_field('about_us_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="aboutmain-content" <?php echo $style;?>>
   <div class="container">
      <?php if(get_sub_field('about_us_title')):?>
      <div class="inner-title" data-aos="fade-left" data-aos-duration="2000">
         <h1><?php echo get_sub_field('about_us_title'); ?></h1>
      </div>
      <?php endif;?>
      <?php if(get_sub_field('about_us_description')):?>
      <div class="aboutmain-desc" data-aos="fade-up" data-aos-duration="2000">
         <?php echo get_sub_field('about_us_description');?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'advanced_technology_page'): ?>
<?php if(get_sub_field('use_advanced_technology')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('advanced_technology_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('advanced_technology_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('advanced_technology_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('advanced_technology_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('advanced_technology_background_color')) || (get_sub_field('advanced_technology_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="advtechnology-section">
   <div class="container">
      <?php if(get_sub_field('advanced_technology_title')):?>
      <div class="inner-title" data-aos="fade-down" data-aos-duration="2000">
         <h1><?php echo get_sub_field('advanced_technology_title'); ?></h1>
      </div>
      <?php endif;?>
      <?php if(get_sub_field('advanced_technology_sub_description')):?>
      <div class="innertop-desc" data-aos="fade-up" data-aos-duration="2000">
         <?php echo get_sub_field('advanced_technology_sub_description'); ?>
      </div>
      <?php endif;?>
      <?php $advanced_technology_list=get_sub_field('advanced_technology_list');?>
      <?php if($advanced_technology_list):?>
      <div class="row hmadvantage-list advtechnology-list">
         <?php foreach ($advanced_technology_list as $adv_val) :?>
         <div class="col-lg-3 col-sm-6 col-12 item">
            <div class="hmadvantagebox" data-aos="zoom-in" data-aos-duration="2000">
               <?php if($adv_val['image']):?>
               <div class="hmadvbox-img">
                  <img src="<?php echo $adv_val['image']['url']; ?>" alt="<?php echo $adv_val['title']; ?>" width="135" height="116" />
               </div>
               <?php endif;?>
               <?php if($adv_val['title']):?>
               <h3><?php echo $adv_val['title']; ?></h3>
               <?php endif;?>
               <?php if($adv_val['content']):?>
               <p><?php echo $adv_val['content']; ?></p>
               <?php endif;?>
            </div>
         </div>
         <?php endforeach;?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'promotion_plans_page'): ?>
<?php if(get_sub_field('use_promotion_plans')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('promotion_plans_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('promotion_plans_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('promotion_plans_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('promotion_plans_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('promotion_plans_background_color')) || (get_sub_field('promotion_plans_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="promoplanlist-section" <?php echo $style;?>>
   <div class="container">
      <?php if((get_sub_field('promotion_plans_title')) || (get_sub_field('promotion_plans_sub_description'))):?>
      <div class="inner-title">
         <?php if(get_sub_field('promotion_plans_title')):?>
         <h1 data-aos="fade-down" data-aos-duration="2000"><?php echo get_sub_field('promotion_plans_title'); ?></h1>
         <?php endif;?>
         <?php if(get_sub_field('promotion_plans_sub_description')):?>
         <p data-aos="fade-up" data-aos-duration="2000"><?php echo get_sub_field('promotion_plans_sub_description'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <?php 
         $promotion_plans_list=get_sub_field('promotion_plans_list');
         $promotion_plans_box_curve=get_sub_field('promotion_plans_box_curve'); 
         ?>
      <?php if($promotion_plans_list):?>
      <div class="row hmpromoslist promoslist-row">
         <?php foreach ($promotion_plans_list as $promo_val) :?>
         <div class="item col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="2000">
            <a class="hmpromosbox" href="<?php echo $promo_val['link']; ?>" style="background-image: url(<?php echo $promotion_plans_box_curve['url']; ?>);">
               <img src="<?php echo $promotion_plans_box_curve['url']; ?>" alt="<?php echo $promo_val['title']; ?>" width="303" height="248">
               <div class="hmpromo-info">
                  <?php if($promo_val['title']):?>
                  <h3><?php echo $promo_val['title']; ?></h3>
                  <?php endif;?>
                  <?php if($promo_val['price']):?>
                  <div class="promoprice"><?php echo $promo_val['price']; ?></div>
                  <?php endif;?>
                  <?php if($promo_val['description']):?>
                  <p><?php echo $promo_val['description'];?></p>
                  <?php endif;?>
               </div>
            </a>
         </div>
         <?php endforeach;?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'discount_plans_page'): ?>
<?php if(get_sub_field('use_discount_plans')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('discount_plans_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('discount_plans_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('discount_plans_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('discount_plans_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('discount_plans_background_color')) || (get_sub_field('discount_plans_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="discplanlist-section" <?php echo $style;?>>
   <div class="container">
      <?php if((get_sub_field('discount_plans_title')) || (get_sub_field('discount_plans_sub_description'))):?>
      <div class="inner-title">
         <?php if(get_sub_field('discount_plans_title')):?>
         <h1 data-aos="fade-down" data-aos-duration="2000"><?php echo get_sub_field('discount_plans_title'); ?></h1>
         <?php endif;?>
         <?php if(get_sub_field('discount_plans_sub_description')):?>
         <p data-aos="fade-up" data-aos-duration="2000"><?php echo get_sub_field('discount_plans_sub_description'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <?php 
         $discount_plans_list=get_sub_field('discount_plans_list');?>
      <?php if($discount_plans_list):?>
      <div class="row hmdiscplanlist discplanlist-row">
         <?php foreach ($discount_plans_list as $dis_val) :?>
         <div class="item col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="2000">
            <div class="discplan-box">
               <?php if(($dis_val['title']) || ($dis_val['price']) || ($dis_val['monthly_yearly'])):?>
               <div class="discplan-head">
                  <?php if($dis_val['title']):?>
                  <h3><?php echo $dis_val['title']; ?></h3>
                  <?php endif;?>
                  <?php if(($dis_val['price']) || ($dis_val['monthly_yearly'])):?>
                  <div class="discplan-price"><?php if($dis_val['price']):?><span><?php echo $dis_val['price']; ?></span><?php endif;?> <?php if($dis_val['monthly_yearly']):?><small><?php echo $dis_val['monthly_yearly']; ?></small><?php endif;?></div>
                  <?php endif;?>
               </div>
               <?php endif;?>
               <?php $plans=$dis_val['plans']; ?>
               <?php if($plans):?>
               <div class="discplan-info">
                  <ul>
                     <?php foreach ($plans as $plans_val) :?>
                     <li><?php echo $plans_val['list']; ?></li>
                     <?php endforeach;?>
                  </ul>
               </div>
               <?php endif;?>
               <?php if($dis_val['button_text']):?>
               <div class="discplan-btn">
                  <a class="button" href="<?php echo $dis_val['button_link']; ?>"><?php echo $dis_val['button_text']; ?></a>
               </div>
               <?php endif;?>
            </div>
         </div>
         <?php endforeach;?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'faqs_page'): ?>
<?php if(get_sub_field('use_faqs')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('faqs_background_image')):?>
<?php $backcolor = 'background-color:'.get_sub_field('faqs_background_image').';';?>
<?php endif; ?>
<?php if(get_sub_field('faqs_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('faqs_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('faqs_background_image')) || (get_sub_field('faqs_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="faqs-section" <?php echo $style;?>>
   <div class="container">
      <?php if(get_sub_field('faqs_tite')):?>
      <div class="inner-title" data-aos="fade-down" data-aos-duration="2000">
         <h1><?php echo get_sub_field('faqs_tite'); ?></h1>
      </div>
      <?php endif;?>
      <?php if(get_sub_field('faqs_sub_description')):?>
      <div class="innertop-desc" data-aos="fade-up" data-aos-duration="2000">
         <?php echo get_sub_field('faqs_sub_description'); ?>
      </div>
      <?php endif;?>
      <?php $faqs_list=get_sub_field('faqs_list');?>
      <?php if($faqs_list):?>
      <div class="faqsblock">
         <div class="accordion" data-aos="fade-up" data-aos-duration="2000">
            <?php foreach ($faqs_list as $faq_val) :?>
            <div class="accordionrow">
               <?php if($faq_val['question']):?>
               <a class="acclink" href="" title="<?php echo $faq_val['question']; ?>"><?php echo $faq_val['question']; ?></a>
               <?php endif;?>
               <?php if($faq_val['answer']):?>
               <div class="accord-detail">
                  <p><?php echo $faq_val['answer']; ?></p>
               </div>
               <?php endif;?>
            </div>
            <?php endforeach;?>
         </div>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'finance_insurance_page'): ?>
<?php if(get_sub_field('use_finance_insurance')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('finance_insurance_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('finance_insurance_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('finance_insurance_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('finance_insurance_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('finance_insurance_background_color')) || (get_sub_field('finance_insurance_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<?php if((get_sub_field('finance_insurance_title')) || (get_sub_field('finance_insurance_description'))):?>
<section class="financemain-section" <?php echo $style;?>>
   <div class="container">
      <?php if(get_sub_field('finance_insurance_title')):?>
      <div class="inner-title" data-aos="fade-left" data-aos-duration="2000">
         <h1><?php echo get_sub_field('finance_insurance_title'); ?></h1>
      </div>
      <?php endif;?>
      <?php if(get_sub_field('finance_insurance_description')):?>
      <div class="finance-desc" data-aos="fade-up" data-aos-duration="2000">
         <?php echo get_sub_field('finance_insurance_description');?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php $finance_insurance_plans=get_sub_field('finance_insurance_plans'); ?>
<?php if($finance_insurance_plans):?>
<section class="financeplanlist-section">
   <div class="container">
      <?php if($finance_insurance_plans['title']):?>
      <h3 data-aos="fade-left" data-aos-duration="2000"><?php echo $finance_insurance_plans['title']; ?></h3>
      <?php endif;?>
      <?php if($finance_insurance_plans['plans']):?>
      <ul class="financeplanlist" data-aos="fade-up" data-aos-duration="2000">
         <?php foreach ($finance_insurance_plans['plans'] as $plan_val) :?>
         <li><span><?php echo $plan_val['name']; ?></span></li>
         <?php endforeach;?>
      </ul>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php if(get_sub_field('finance_insurance_bottom_description')):?>
<section class="finance-btmcontent">
   <div class="container">
      <div class="finance-desc" data-aos="fade-up" data-aos-duration="2000">
         <?php echo get_sub_field('finance_insurance_bottom_description'); ?>
      </div>
   </div>
</section>
<?php endif;?>
<?php endif;?>
<?php elseif(get_row_layout() == 'your_first_visit_page'): ?>
<?php if(get_sub_field('use_your_first_visit')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('your_first_visit_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('your_first_visit_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('your_first_visit_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('your_first_visit_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('your_first_visit_background_color')) || (get_sub_field('your_first_visit_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="firstvisit-section" <?php echo $style;?>>
   <div class="container">
      <?php if(get_sub_field('your_first_visit_title')):?>
      <div class="inner-title" data-aos="fade-left" data-aos-duration="2000">
         <h1><?php echo get_sub_field('your_first_visit_title'); ?></h1>
      </div>
      <?php endif;?>
      <?php if(get_sub_field('your_first_visit_sub_description')):?>
      <div class="firstvisit-desc" data-aos="fade-up" data-aos-duration="2000">
         <?php echo get_sub_field('your_first_visit_sub_description'); ?>
      </div>
      <?php endif;?>
      <?php if((get_sub_field('your_first_visit_description')) || (get_sub_field('enable_your_first_visit_image'))):?>
      <div class="firstvisit-btmcontent clearfix" data-aos="fade-up" data-aos-duration="2000">
         <?php if((get_sub_field('enable_your_first_visit_image')) && (get_sub_field('first_visit_image'))):?>
         <div class="firstvisit-thumb" data-aos="fade-left" data-aos-duration="2000">
            <img src="<?php echo get_sub_field('first_visit_image')['sizes']['content-thumb']; ?>" alt="<?php echo get_sub_field('your_first_visit_title'); ?>" width="552" height="514" />
         </div>
         <?php endif;?>
         <?php echo get_sub_field('your_first_visit_description'); ?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'book_and_contact_info_page'): ?>
<?php if((get_sub_field('use_book_an_appointment_page_form')) || (get_sub_field('use_contact_us_page_form'))):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('book_and_contact_info_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('book_and_contact_info_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('book_and_contact_info_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('book_and_contact_info_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('book_and_contact_info_background_color')) || (get_sub_field('book_and_contact_info_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<?php  
   $book_appointment_page_form = get_field('book_appointment_page_form', 'option' );
   $contact_us_page_form = get_field('contact_us_page_form', 'option' );
   ?>
<section class="bookappform-section" <?php echo $style;?>>
   <div class="container">
      <?php if((get_sub_field('book_and_contact_info_title')) || (get_sub_field('book_and_contact_info_sub_description'))):?>
      <div class="inner-title">
         <?php if(get_sub_field('book_and_contact_info_title')):?>
         <h1 data-aos="fade-down" data-aos-duration="2000"><?php echo get_sub_field('book_and_contact_info_title'); ?></h1>
         <?php endif;?>
         <?php if(get_sub_field('book_and_contact_info_sub_description')):?>
         <p data-aos="fade-up" data-aos-duration="2000"><?php echo get_sub_field('book_and_contact_info_sub_description'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <div class="bookappform" data-aos="fade-up" data-aos-duration="3000">
         <?php if(get_sub_field('use_book_an_appointment_page_form')):?>
         <?php if($book_appointment_page_form['enable_book_appointment_page_form']):?>
         <?php if(!empty($book_appointment_page_form['select_contact_form_for_book_appointment_page'])):?>
         <?php $shortcode = sprintf("[contact-form-7 id=%1s]",$book_appointment_page_form['select_contact_form_for_book_appointment_page'] ); ?>
         <?php  echo do_shortcode($shortcode);?>     
         <?php endif;?>
         <?php if(!empty($book_appointment_page_form['adit_web_form_for_book_appointment_page'])):?>
         <?php echo $book_appointment_page_form['adit_web_form_for_book_appointment_page']; ?>
         <?php endif; ?>
         <?php endif;?>
         <?php endif;?>
         <?php if(get_sub_field('use_contact_us_page_form')):?>
         <?php if($contact_us_page_form['enable_contact_us_page_form']):?>
         <?php if(!empty($contact_us_page_form['select_contact_form_for_contact_us_page'])):?>
         <?php $shortcode = sprintf("[contact-form-7 id=%1s]",$contact_us_page_form['select_contact_form_for_contact_us_page'] ); ?>
         <?php  echo do_shortcode($shortcode);?>      
         <?php endif;?>
         <?php if(!empty($contact_us_page_form['adit_web_form_for_contact_us_page'])):?>
         <?php echo $contact_us_page_form['adit_web_form_for_contact_us_page']; ?>
         <?php endif; ?>
         <?php endif;?>
         <?php endif;?>
      </div>
      <?php if((get_sub_field('book_and_contact_info_bottom_description'))):?>
      <div class="contactbook-btmdesc" >
         <p><?php echo get_sub_field('book_and_contact_info_bottom_description'); ?></p>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'doctors_and_team_page'): ?>
<?php if(get_sub_field('use_doctors_and_team')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('doctors_team_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('doctors_team_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('doctors_team_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('doctors_team_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('doctors_team_background_color')) || (get_sub_field('doctors_team_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="doctorlist-section" <?php echo $style;?>>
   <div class="container">
      <?php if((get_sub_field('doctors_team_title')) || (get_sub_field('doctors_team_sub_description'))):?>
      <div class="inner-title">
         <?php if(get_sub_field('doctors_team_title')):?>
         <h1 data-aos="fade-down" data-aos-duration="2000"><?php echo get_sub_field('doctors_team_title'); ?></h1>
         <?php endif;?>
         <?php if(get_sub_field('doctors_team_sub_description')):?>
         <p data-aos="fade-up" data-aos-duration="2000"><?php echo get_sub_field('doctors_team_sub_description'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <div class="row doctor-list">
         <?php 
            $doctors_team_list=get_sub_field('doctors_team_list'); 
            $doctors_team_read_more_button_text=get_sub_field('doctors_team_read_more_button_text');
            ?>
         <?php if($doctors_team_list):?>
         <?php foreach ($doctors_team_list as $team_val) :?>
         <div class="col-lg-4 col-sm-6 item" data-aos="zoom-in" data-aos-duration="2000">
            <div class="drlist-box">
               <?php if(get_the_post_thumbnail_url($team_val->ID)):?>
               <?php if(get_field('enable_details',$team_val->ID)):?>
               <a href="<?php echo get_the_permalink($team_val->ID); ?>" class="drlist-boxthumb">
               <img src="<?php echo get_the_post_thumbnail_url($team_val->ID); ?>" alt="<?php echo get_field('doctor_name',$team_val->ID); ?>" width="325" height="278" />
               </a>
               <?php else:?>
               <img src="<?php echo get_the_post_thumbnail_url($team_val->ID); ?>" alt="<?php echo get_field('doctor_name',$team_val->ID); ?>" width="325" height="278" />
               <?php endif;?>
               <?php endif;?>
               <div class="drlistbox-desc">
                  <?php if(get_field('doctor_name',$team_val->ID)):?>
                  <?php if(get_field('enable_details',$team_val->ID)):?>
                  <h3><a href="<?php echo get_the_permalink($team_val->ID); ?>"><?php echo get_field('doctor_name',$team_val->ID); ?></a></h3>
                  <?php else:?>
                  <h3><?php echo get_field('doctor_name',$team_val->ID); ?></h3>
                  <?php endif;?>
                  <?php endif;?>
                  <?php if((get_field('doctor_designation',$team_val->ID)) || (get_field('enable_designation',$team_val->ID))):?>
                  <span class="drlist-designation"><?php echo get_field('doctor_designation',$team_val->ID); ?></span>
                  <?php endif;?>
                  <?php if((get_field('enable_short_description',$team_val->ID)) && (get_field('short_description',$team_val->ID))):?>
                  <p><?php echo get_field('short_description',$team_val->ID); ?></p>
                  <?php endif;?>               
               </div>
               <?php if(($doctors_team_read_more_button_text) && (get_field('enable_details',$team_val->ID))):?>
               <div class="drlistbox-btn">
                  <a class="gradient-btn" href="<?php echo get_the_permalink($team_val->ID); ?>"><?php echo $doctors_team_read_more_button_text; ?></a>
               </div>
               <?php endif;?>
            </div>
         </div>
         <?php endforeach;?>
         <?php endif;?>      
      </div>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'how_it_works_page'): ?>
<?php if(get_sub_field('use_how_it_works')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('how_it_works_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('how_it_works_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('how_it_works_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('how_it_works_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('how_it_works_background_color')) || (get_sub_field('how_it_works_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="howitwork-section">
   <div class="container">
      <?php if(get_sub_field('how_it_works_title')):?>
      <div class="inner-title" data-aos="fade-down" data-aos-duration="2000">
         <h1><?php echo get_sub_field('how_it_works_title'); ?></h1>
      </div>
      <?php endif;?>
      <?php if(get_sub_field('how_it_works_sub_description')):?>
      <div class="innertop-desc" data-aos="fade-up" data-aos-duration="2000">
         <?php echo get_sub_field('how_it_works_sub_description'); ?>
      </div>
      <?php endif;?>
      <?php $how_it_works_steps=get_sub_field('how_it_works_steps');?>
      <?php if($how_it_works_steps):?>
      <div class="row howitwork-list">
         <?php foreach ($how_it_works_steps as $hw_val) :?>
         <div class="col-sm-12 item">
            <div class="howitwork-block">
               <?php if($hw_val['image']):?>
               <div class="howitwork-thumbcol" data-aos="fade-right" data-aos-duration="2000">
                  <div class="howitwork-thumb">
                     <img src="<?php echo $hw_val['image']['sizes']['home-service-thumb']; ?>" alt="<?php echo $hw_val['title']; ?>" width="325" height="278" />
                  </div>
               </div>
               <?php endif;?>
               <?php if(($hw_val['title']) || ($hw_val['content']) || ($hw_val['date'])):?>
               <div class="howitwork-textcol" data-aos="fade-left" data-aos-duration="2000">
                  <div class="howitwork-text">
                     <?php if($hw_val['title']):?>
                     <h3><?php echo $hw_val['title']; ?></h3>
                     <?php endif;?>
                     <?php if($hw_val['content']):?>
                     <p><?php echo $hw_val['content']; ?></p>
                     <?php endif;?>
                     <?php if($hw_val['date']):?>
                     <div class="howitwork-date"><?php echo $hw_val['date']; ?></div>
                     <?php endif;?>
                  </div>
               </div>
               <?php endif;?>
            </div>
         </div>
         <?php endforeach;?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'gallery_page'): ?>
<?php if(get_sub_field('use_gallery')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('gallery_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('gallery_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('gallery_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('gallery_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('gallery_background_color')) || (get_sub_field('gallery_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="gallerylist-section" <?php echo $style;?>>
   <div class="container">
      <?php if((get_sub_field('gallery_title')) || (get_sub_field('gallery_sub_description'))):?>
      <div class="inner-title">
         <?php if(get_sub_field('gallery_title')):?>
         <h1 data-aos="fade-down" data-aos-duration="2000"><?php echo get_sub_field('gallery_title'); ?></h1>
         <?php endif;?>
         <?php if(get_sub_field('gallery_sub_description')):?>
         <p data-aos="fade-up" data-aos-duration="2000"><?php echo get_sub_field('gallery_sub_description'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <?php  
         $image_gallery=get_sub_field('image_gallery');
         $video_gallery=get_sub_field('video_gallery');
         
         ?>
      <?php if((get_sub_field('use_image_gallery')) || (get_sub_field('use_video_gallery'))):?>
      <div class="row gallerylist-row mfpgallery">
         <?php if((get_sub_field('use_image_gallery')) && ($image_gallery)):?>
         <?php foreach ($image_gallery as $gal_val) :?>
         <div class="col-lg-4 col-sm-6 item" data-aos="zoom-in" data-aos-duration="2000">
            <div class="gallerylist-box">
               <a class="gallerylist-thumb" href="<?php echo $gal_val['sizes']['gallery-thumb']; ?>">
               <img src="<?php echo $gal_val['sizes']['gallery-thumb']; ?>" alt="<?php echo $gal_val['alt']; ?>" width="416" height="244" />
               </a>
            </div>
         </div>
         <?php endforeach;?>
         <?php endif;?>
         <?php if((get_sub_field('use_video_gallery')) && ($video_gallery)):?>
         <?php foreach ($video_gallery as  $vd_val) :?>
         <div class="col-lg-4 col-sm-6 item" data-aos="zoom-in" data-aos-duration="2000">
            <div class="gallerylist-box">
               <a class="gallerylist-thumb mfp-iframe" href="<?php echo $vd_val['video_url']; ?>">
               <img src="<?php echo $vd_val['video_thumbnail']['sizes']['gallery-thumb']; ?>" alt="<?php echo $vd_val['video_thumbnail']['alt']; ?>" width="416" height="244" />
               <span class="gallryplay-btn"><i class="fa fa-play"></i></span>
               </a>
            </div>
         </div>
         <?php endforeach;?>
         <?php endif;?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'blog_page'): ?>
<?php if(get_sub_field('use_blog')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('blog_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('blog_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('blog_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('blog_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('blog_background_color')) || (get_sub_field('blog_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="bloglist-section">
   <div class="container">
      <?php if((get_sub_field('blog_title')) || (get_sub_field('blog_sub_title'))):?>
      <div class="inner-title">
         <?php if(get_sub_field('blog_title')):?>
         <h1 data-aos="fade-down" data-aos-duration="2000"><?php echo get_sub_field('blog_title'); ?></h1>
         <?php endif;?>
         <?php if(get_sub_field('blog_sub_title')):?>
         <p data-aos="fade-up" data-aos-duration="2000"><?php echo get_sub_field('blog_sub_title'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <div class="row hmbloglist">
         <?php $readmore=get_field('blog_read_more_button_text','option'); ?>
         <?php $pagenum = isset( $_REQUEST['pagenum'] ) ? intval( $_REQUEST['pagenum'] ) : 1; 
            $args = array(
               'post_status' => array('publish'),
               'post_type' => 'post',
               'orderby' => 'post_date',    //date,post_views_count
               'order'=>'DESC',
               'posts_per_page' => get_field('show_number_of_blogs_in_blog_page','option'),
               'paged' => $pagenum
            );
            $get_blogs = new WP_Query( $args );
            if ( $get_blogs->have_posts() ) :
               while ($get_blogs->have_posts() ) : 
                  $get_blogs->the_post();
                  $postid=$get_blogs->post->ID; ?>
         <div class="item col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="2000">
            <div class="hmblogbox">
               <?php if(get_the_post_thumbnail_url($postid)):?>
               <a class="hmblogthumb" href="<?php echo get_the_permalink($postid);?>">
               <img src="<?php echo get_the_post_thumbnail_url($postid,'home-service-thumb'); ?>" alt="<?php echo get_the_title($postid); ?>" width="325" height="278" />
               </a>
               <?php endif;?>
               <div class="hmblogbox-desc">
                  <h3><a href="<?php echo get_the_permalink($postid);?>"><?php echo get_the_title($postid); ?></a></h3>
                  <div class="blogdate"><?php echo get_the_date(); ?></div>
               </div>
               <?php if($readmore):?>
               <div class="hmblogbox-btn">
                  <a class="border-btn" href="<?php echo get_the_permalink($postid);?>"><?php echo $readmore; ?></a>
               </div>
               <?php endif;?>
            </div>
         </div>
         <?php endwhile;?>
         <?php endif;?>
         <?php wp_reset_query();?>
         <div class="bloglist-pagination" data-aos="fade-up" data-aos-duration="2000">
            <div class="blog-pagination">
               <?php
                  $pagination = paginate_links(array(
                   'base' => add_query_arg( 'pagenum', '%#%' ),
                   'format' => '',
                   'prev_text' => __( '<i class="fas fa-arrow-right"></i> Previous', 'wpuf' ),
                   'next_text' => __( '<i class="fas fa-arrow-right"></i> Next', 'wpuf' ),
                   'total' => $get_blogs->max_num_pages,
                   'current' => $pagenum
                  ));
                  if ( $pagination ) {  echo $pagination;  }
                  ?>
            </div>
         </div>
      </div>
</section>
<?php endif;?>
<?php endif;?>
<?php endwhile;?>
<?php endif;?>
<?php include get_template_directory().'/frontpage-sections.php'; ?>
</div>
<?php get_footer();?>
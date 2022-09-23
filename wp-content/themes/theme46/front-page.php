<?php get_header();?>
<?php if(have_rows('homepage_content')):?>
<?php while(have_rows('homepage_content')):the_row();?>
<?php if(get_row_layout() == 'banner'):?>
<?php if(get_sub_field('use_banner_slider')):?>
<?php  
   $slider=get_sub_field('slider');
   $title_color=get_sub_field('title_color');
   $sub_title_color=get_sub_field('sub_title_color');
   
   
   ?>
<?php if($slider):?>
<section class="hmbanner-section">
   <div class="hmbanner-inner">
   <div class="container">
      <div class="hmbanner-slider owl-carousel">
         <?php foreach ($slider as $slide_val):?>
         <div class="row hmbanner-item">
            <?php if(($slide_val['title']) || ($slide_val['sub_title']) || ($slide_val['button_text'])):?>
            <?php if($slide_val['image']):?>
            <div class="col-lg-6 col-sm-12 hmbanner-textcol">
               <?php else:?>
               <div class="col-lg-12 col-sm-12 hmbanner-textcol">
                  <?php endif;?>
                  <div class="hmbanner-text">
                     <?php if($slide_val['title']):?>
                     <h2 data-aos="fade-down" <?php if($title_color):?>style="color:<?php echo $title_color ?>;"<?php endif;?>><?php echo $slide_val['title']; ?></h2>
                     <?php endif;?>
                     <?php if($slide_val['sub_title']):?>
                     <p data-aos="fade-up" <?php if($sub_title_color):?>style="color:<?php echo $sub_title_color ?>;"<?php endif;?>><?php echo $slide_val['sub_title']; ?></p>
                     <?php endif;?>
                     <?php if($slide_val['button_text']):?>
                     <a class="tease-btn border-btn aos-init aos-animate" href="<?php echo $slide_val['button_link']; ?>" data-aos="fade-up"><?php echo $slide_val['button_text']; ?></a>
                     <?php endif;?>
                  </div>
               </div>
               <?php endif;?>
               <?php if($slide_val['image']):?>
               <div class="col-lg-6 col-sm-12 hmbanner-imgcol">
                  <div class="hmbanner-img" style="background-image: url(<?php echo $slide_val['image']['sizes']['home-banner']; ?>);">
                     <img src="<?php echo $slide_val['image']['sizes']['home-banner']; ?>" alt="<?php echo strip_tags($slide_val['title']); ?>" width="653" height="653" />
                  </div>
               </div>
               <?php endif;?>
            </div>
            <?php endforeach;?>
         </div>
      </div>
   </div>
</section>
<?php endif;?>
<?php endif;?>
<?php $video_image = get_sub_field('banner_video_image'); ?>
<?php if(!empty(get_sub_field('use_banner_video'))): ?>
<?php if(get_sub_field('use_html_video')):?>
<div class="indexvideo">
   <img class="indexvideoimage" src="<?php echo $video_image['sizes']['inner-page-banner']; ?>" alt="<?php echo $video_image['alt']; ?>" height="651" width="1920" />
   <video id="video-slider" class="video-js" poster="<?php echo $video_image['url']; ?>" preload="metadata" playsinline muted="true" loop autoplay>
      <?php if(!empty(get_sub_field('mp4_link'))): ?>
      <source src="<?php echo get_sub_field('mp4_link'); ?>" type="video/mp4">
      <?php endif; ?>
      <?php if(!empty(get_sub_field('webm_link'))): ?>
      <source src="<?php echo get_sub_field('webm_link'); ?>" type="video/webm">
      <?php endif; ?>
      <?php if(!empty(get_sub_field('ogv_link'))): ?>
      <source src="<?php echo get_sub_field('ogv_link'); ?>" type="video/ogg">
      <?php endif; ?>
   </video>
</div>
<?php endif; ?>
<?php if(get_sub_field('use_youtube_iframe')):?>
<div class="indexvideo">
   <img class="indexvideoimage" src="<?php echo $video_image['sizes']['inner-page-banner']; ?>" alt="<?php echo $video_image['alt']; ?>" height="651" width="1920" />
   <?php echo get_sub_field('youtube_iframe'); ?>
</div>
<?php endif; ?>
<?php endif; ?>
<?php elseif(get_row_layout() == 'home_book_an_appointment'):?>
<?php if(get_sub_field('use_home_book_an_appointment_form')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('home_book_an_appointment_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('home_book_an_appointment_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('home_book_an_appointment_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('home_book_an_appointment_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('home_book_an_appointment_background_color')) || (get_sub_field('advantages_and_home_book_an_appointment_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<?php $home_page_banner_form=get_field('home_page_banner_form','option'); ?>
<?php if($home_page_banner_form['enable_home_page_banner_form']):?>
<section class="hmformsection" <?php echo $style; ?>>
   <div class="container">
      <?php if(($home_page_banner_form['home_page_form_title']) || ($home_page_banner_form['home_page_form_sub_title'])):?>
      <div class="maintitle">
         <?php if($home_page_banner_form['home_page_form_title']):?>
         <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo $home_page_banner_form['home_page_form_title']; ?></h2>
         <?php endif;?>
         <?php if($home_page_banner_form['home_page_form_title']):?>
         <p data-aos="fade-up" data-aos-duration="3000"><?php echo $home_page_banner_form['home_page_form_sub_title']; ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <div class="hmbookform" data-aos="fade-up" data-aos-duration="3000">
         <?php if(!empty($home_page_banner_form['select_contact_form_for_home_page'])):?>
         <?php $shortcode = sprintf("[contact-form-7 id=%1s]",$home_page_banner_form['select_contact_form_for_home_page'] ); ?>
         <?php  echo do_shortcode($shortcode);?>      
         <?php endif;?>
         <?php if(!empty($home_page_banner_form['adit_web_form_for_home_page'])):?>
         <?php echo $home_page_banner_form['adit_web_form_for_home_page']; ?>
         <?php endif; ?>
      </div>
   </div>
</section>
<?php endif;?>
<?php endif;?>
<?php elseif(get_row_layout() == 'about_us'):?>
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
<section class="hmaboutsection" <?php echo $style;?>>
   <div class="container">
   <div class="row hmabout-row">
      <?php if((get_sub_field('enable_about_us_image')) && (get_sub_field('about_us_image'))):?>
      <div class="col-lg-6 col-sm-12 hmabout-imgcol">
         <div class="hmabout-image" data-aos="fade-right" data-aos-duration="2000">
            <img src="<?php echo get_sub_field('about_us_image')['sizes']['home-about-image']; ?>" alt="<?php echo get_sub_field('about_us_title'); ?>" width="623" height="623" />
         </div>
      </div>
      <?php endif;?>
      <?php if((get_sub_field('enable_about_us_image')) && (get_sub_field('about_us_image'))):?>
      <div class="col-lg-6 col-sm-12 hmabout-textcol">
         <?php else:?>
         <div class="col-lg-12 col-sm-12 hmabout-textcol">
            <?php endif;?>
            <div class="hmaboutus-text" data-aos="fade-up" data-aos-duration="2000">
               <?php if(get_sub_field('about_us_title')):?>
               <div class="maintitle">
                  <h2><?php echo get_sub_field('about_us_title');?></h2>
               </div>
               <?php endif;?>
               <?php echo get_sub_field('about_us_description'); ?>
               <?php if((get_sub_field('about_us_button_text')) || (get_sub_field('about_us_read_more_button_text'))):?>
               <div class="hmabout-btn">
                  <?php if(get_sub_field('about_us_read_more_button_text')):?>
                  <a class="border-btn" href="<?php echo get_sub_field('about_us_read_more_button_link');?>"><?php echo get_sub_field('about_us_read_more_button_text');?></a>
                  <?php endif;?>
                  <?php if(get_sub_field('about_us_button_text')):?>
                  <a class="border-btn" href="<?php echo get_sub_field('about_us_button_link');?>"><?php echo get_sub_field('about_us_button_text');?></a>
                  <?php endif;?>
               </div>
               <?php endif;?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'advantages'):?>
<?php if(get_sub_field('use_advantages')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('advantages_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('advantages_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('advantages_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('advantages_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('advantages_background_color')) || (get_sub_field('advantages_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="hmadvantage-section" <?php echo $style;?>>
   <div class="container">
   <?php if((get_sub_field('advantages_title')) || (get_sub_field('advantages_sub_title'))):?>
   <div class="maintitle">
      <?php if(get_sub_field('advantages_title')):?>
      <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('advantages_title'); ?></h2>
      <?php endif;?>
      <?php if(get_sub_field('advantages_sub_title')):?>
      <p data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('advantages_sub_title'); ?></p>
      <?php endif;?>
   </div>
   <?php endif;?>
   <?php $advantages_list=get_sub_field('advantages_list');?>
   <div class="row hmadvantagemain-row">
      <?php if($advantages_list):?>
      <?php if((get_sub_field('enable_advantages_image')) && (get_sub_field('advantages_image'))):?>
      <div class="col-lg-6 col-sm-12 hmadvantage-leftcol">
         <?php else:?>
         <div class="col-lg-12 col-sm-12 hmadvantage-leftcol">
            <?php endif;?>
            <div class="row hmadvantage-list">
               <?php foreach ($advantages_list as  $adv_val) :?>
               <div class="col-sm-6 col-12 item">
                  <div class="hmadvantagebox" data-aos="fade-up" data-aos-duration="2000">
                     <?php if($adv_val['image']):?>
                     <div class="hmadvbox-img">
                        <img src="<?php echo $adv_val['image']['url']; ?>" alt="<?php echo $adv_val['title']; ?>" width="135" height="116" />
                     </div>
                     <?php endif;?>
                     <?php if($adv_val['title']):?>
                     <h3><?php echo $adv_val['title']; ?></h3>
                     <?php endif;?>
                     <?php if($adv_val['description']):?>
                     <p><?php echo $adv_val['description']; ?></p>
                     <?php endif;?>
                  </div>
               </div>
               <?php endforeach;?>
            </div>
         </div>
         <?php endif;?>
         <?php if((get_sub_field('enable_advantages_image')) && (get_sub_field('advantages_image'))):?>
         <div class="col-lg-6 col-sm-12 hmadvantage-imgcol">
            <div class="hmadvantage-img" data-aos="fade-left" style="background-image: url(<?php echo get_sub_field('advantages_image')['sizes']['home-adv-image']; ?>);">
               <img src="<?php echo get_sub_field('advantages_image')['sizes']['home-adv-image']; ?>" alt="<?php echo get_sub_field('advantages_title'); ?>" width="634" height="748" />
            </div>
         </div>
         <?php endif;?>
      </div>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'services_stripe'):?>
<?php if(get_sub_field('use_services_stripe')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('services_stripe_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('services_stripe_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('services_stripe_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('services_stripe_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('services_stripe_background_color')) || (get_sub_field('services_stripe_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="hmservicestripe-section" <?php echo $style; ?>>
   <div class="hmservicestripe-inner">
      <div class="container">
         <div class="hmservicestripe-content" data-aos="zoom-out">
            <?php if((get_sub_field('services_stripe_title')) || (get_sub_field('services_stripe_sub_title'))):?>
            <div class="maintitle">
               <?php if(get_sub_field('services_stripe_title')):?>
               <h2 ><?php echo get_sub_field('services_stripe_title'); ?></h2>
               <?php endif;?>
               <?php if(get_sub_field('services_stripe_sub_title')):?>
               <p ><?php echo get_sub_field('services_stripe_sub_title'); ?></p>
               <?php endif;?>
            </div>
            <?php endif;?>
            <?php if((get_sub_field('services_stripe_button_text')) || (get_sub_field('services_stripe_call_us_button_text'))):?>
            <div class="hmservicestripe-btn">
               <?php if(get_sub_field('services_stripe_button_text')):?>
               <a class="border-btn" href="<?php echo get_sub_field('services_stripe_button_link');?>"><?php echo get_sub_field('services_stripe_button_text');?></a>
               <?php endif;?>
               <?php if(get_sub_field('services_stripe_call_us_button_text')):?>
               <a class="border-btn" href="<?php echo get_sub_field('services_stripe_call_us_button_link');?>"><?php echo get_sub_field('services_stripe_call_us_button_text');?></a>
               <?php endif;?>
            </div>
            <?php endif;?>
         </div>
      </div>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'services'):?>
<?php if(get_sub_field('use_services')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('services_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('services_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('services_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('services_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('services_background_color')) || (get_sub_field('services_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="hmservice-section" <?php echo $style;?>>
   <div class="container">
      <?php if((get_sub_field('services_title')) || (get_sub_field('services_sub_title'))):?>
      <div class="maintitle">
         <?php if(get_sub_field('services_title')):?>
         <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('services_title'); ?></h2>
         <?php endif;?>
         <?php if(get_sub_field('services_sub_title')):?>
         <p data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('services_sub_title'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <?php  
         $services_list=get_sub_field('services_list');
         $select_services=get_sub_field('select_services');
         $services_read_more_button_text=get_sub_field('services_read_more_button_text');
         
         ?>
      <?php if((get_sub_field('select_services_from_list')) || (get_sub_field('manually_add_services'))):?>
      <div class="row hmservicelist hmserviceslider owl-carousel">
         <?php if((get_sub_field('manually_add_services')) && ($services_list)):?>
         <?php foreach ($services_list as $ser_list):?>
         <div class="item col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-duration="2000">
            <div class="hmservicebox">
               <?php if($ser_list['image']):?>
               <a class="hmservice-thumb" href="<?php echo $ser_list['link']; ?>">
               <img src="<?php echo $ser_list['image']['sizes']['home-service-thumb']; ?>" alt="<?php echo $ser_list['title']; ?>" width="325" height="278" />
               </a>
               <?php endif;?>
               <?php if(($ser_list['title']) || ($ser_list['content'])):?>
               <div class="hmservicebox-desc">
                  <?php if($ser_list['title']):?>
                  <h3><a href="<?php echo $ser_list['link']; ?>"><?php echo $ser_list['title']; ?></a></h3>
                  <?php endif;?>
                  <?php if($ser_list['content']):?>
                  <p><?php echo $ser_list['content']; ?>
                  </p>
                  <?php endif;?>
               </div>
               <?php endif;?>
               <?php if($services_read_more_button_text):?>
               <div class="hmservicebox-btn">
                  <a class="border-btn" href="<?php echo $ser_list['link']; ?>"><?php echo $services_read_more_button_text; ?></a>
               </div>
               <?php endif;?>
            </div>
         </div>
         <?php endforeach;?>
         <?php endif;?>
         <?php if((get_sub_field('select_services_from_list')) && ($select_services)):?>
         <?php foreach ($select_services as $sel_ser):?>
         <div class="item col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-duration="2000">
            <div class="hmservicebox">
               <?php if(get_field('banner_image',$sel_ser->ID)):?>
               <a class="hmservice-thumb" href="<?php echo get_the_permalink($sel_ser->ID); ?>">
               <img src="<?php echo get_field('banner_image',$sel_ser->ID)['sizes']['home-service-thumb']; ?>" alt="<?php echo get_field('page_title',$sel_ser->ID); ?>" width="325" height="278" />
               </a>
               <?php endif;?>
               <?php if((get_field('page_title',$sel_ser->ID)) || (get_field('page_sub_description',$sel_ser->ID))):?>
               <div class="hmservicebox-desc">
                  <?php if(get_field('page_title',$sel_ser->ID)):?>
                  <h3><a href="<?php echo get_the_permalink($sel_ser->ID); ?>"><?php echo get_field('page_title',$sel_ser->ID); ?></a></h3>
                  <?php endif;?>
                  <?php if(get_field('page_sub_description',$sel_ser->ID)):?>
                  <p><?php echo get_field('page_sub_description',$sel_ser->ID); ?>
                  </p>
                  <?php endif;?>
               </div>
               <?php endif;?>
               <?php if($services_read_more_button_text):?>
               <div class="hmservicebox-btn">
                  <a class="border-btn" href="<?php echo get_the_permalink($sel_ser->ID); ?>"><?php echo $services_read_more_button_text; ?></a>
               </div>
               <?php endif;?>
            </div>
         </div>
         <?php endforeach;?>
         <?php endif;?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'certificates'):?>
<?php if(get_sub_field('use_certificates')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('certificates_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('certificates_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('certificates_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('certificates_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('certificates_background_color')) || (get_sub_field('certificates_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="hmcertificate-section" <?php echo $style;?>>
   <div class="container">
      <?php if((get_sub_field('certificates_title')) || (get_sub_field('certificates_sub_title'))):?>
      <div class="maintitle">
         <?php if(get_sub_field('certificates_title')):?>
         <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('certificates_title'); ?></h2>
         <?php endif;?>
         <?php if(get_sub_field('certificates_sub_title')):?>
         <p data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('certificates_sub_title'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <?php $certificates_list=get_sub_field('certificates_list');?>
      <?php if($certificates_list):?>
      <div class="row hmcertificatelist hmcertificatslider owl-carousel">
         <?php foreach ($certificates_list as $cert_val):?>
         <div class="item col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-duration="2000">
            <div class="hmcertificatbox">
               <img src="<?php echo $cert_val['logo']['url']; ?>" alt="Cabela's" width="156" height="64" />
            </div>
         </div>
         <?php endforeach;?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'find_ambulance'):?>
<?php if(get_sub_field('use_find_ambulance')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('find_ambulance_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('find_ambulance_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('find_ambulance_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('find_ambulance_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('find_ambulance_background_color')) || (get_sub_field('find_ambulance_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="hmfindambulance-section" <?php echo $style;?>>
   <div class="hmfindambulanceinner">
   <div class="container">
      <div class="row hmfindambulance-row">
         <?php if((get_sub_field('enable_find_ambulance_image')) && (get_sub_field('find_ambulance_image'))):?>
         <div class="col-lg-6 col-md-12 col-sm-12 hmfindambulance-imgcol">
            <div class="hmfindambulance-img" data-aos="fade-right" data-aos-duration="3000">
               <img src="<?php echo get_sub_field('find_ambulance_image')['url']; ?>" alt="<?php echo get_sub_field('find_ambulance_title'); ?>" width="463" height="241">
            </div>
         </div>
         <?php endif;?>
         <?php if((get_sub_field('enable_find_ambulance_image')) && (get_sub_field('find_ambulance_image'))):?>
         <div class="col-lg-6 col-md-12 col-sm-12">
            <?php else:?>
            <div class="col-lg-12 col-md-12 col-sm-12">
               <?php endif;?>
               <div class="hmfindambulance-text" data-aos="fade-left" data-aos-duration="3000">
                  <?php if(get_sub_field('find_ambulance_title')):?>
                  <div class="maintitle">
                     <h2><?php echo get_sub_field('find_ambulance_title'); ?></h2>
                  </div>
                  <?php endif;?>
                  <?php if(get_sub_field('find_ambulance_call_time_text')):?>
                  <div class="hmfindambulance-call">
                     <p><?php echo get_sub_field('find_ambulance_call_time_text');?> <a href="tel:+<?php echo get_field('phone_number','option'); ?>">+<?php echo get_field('phone_number','option'); ?></a></p>
                  </div>
                  <?php endif;?>
                  <?php if(get_sub_field('find_ambulance_button_text')):?>
                  <div class="hmfindambulance-btn">
                     <a class="button" href="<?php echo get_sub_field('find_ambulance_button_link'); ?>"><?php echo get_sub_field('find_ambulance_button_text'); ?></a>
                  </div>
                  <?php endif;?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'team'):?>
<?php if(get_sub_field('use_team')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('team_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('team_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('team_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('team_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('team_background_color')) || (get_sub_field('team_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="hmdoctor-section" <?php echo $style; ?>>
   <div class="container">
      <?php if(get_sub_field('team_title')):?>
      <div class="maintitle">
         <h2 data-aos="fade-right" data-aos-duration="2000"><?php echo get_sub_field('team_title'); ?></h2>
      </div>
      <?php endif;?>
      <?php  
         $team_list=get_sub_field('team_list');
         $team_read_more_button_text=get_sub_field('team_read_more_button_text'); 
         $team_button_text=get_sub_field('team_button_text');
         $team_button_link=get_sub_field('team_button_link');
         
         ?>
      <?php if($team_list):?>
      <div class="hmdoctorlist hmdoctorslider owl-carousel">
         <?php foreach ($team_list as $team_val) :?>
         <div class="row item">
            <div class="col-lg-6 col-md-12 col-sm-12 hmdoctor-textcol">
               <div class="hmdoctor-desc" data-aos="fade-right" data-aos-duration="3000">
                  <?php if(get_field('doctor_name',$team_val->ID)):?>
                  <?php if(get_field('enable_details',$team_val->ID)):?>
                  <h3><a href="<?php echo get_the_permalink($team_val->ID);?>"><?php echo get_field('doctor_name',$team_val->ID); ?></a></h3>
                  <?php else:?>
                  <h3><?php echo get_field('doctor_name',$team_val->ID); ?></h3>
                  <?php endif;?>
                  <?php endif;?>
                  <?php if((get_field('enable_short_description',$team_val->ID)) && (get_field('short_description',$team_val->ID))):?>
                  <p><?php echo get_field('short_description',$team_val->ID); ?></p>
                  <?php endif;?>
                  <?php if((get_field('enable_social_links',$team_val->ID)) && (get_field('social_links',$team_val->ID))):?>
                  <?php $social_links=get_field('social_links',$team_val->ID);?>
                  <div class="hmdrsocial">
                     <ul class="socialmedia">
                        <?php foreach ($social_links as $soc_val):?>
                        <li><a href="<?php echo $soc_val['social_link_url'];?>" target="_blank" title="<?php echo $soc_val['social_link_title'];?>"><i class="<?php echo $soc_val['social_icon_class'];?>"></i></a></li>
                        <?php endforeach;?>
                     </ul>
                  </div>
                  <?php endif;?>
                  <?php if(($team_read_more_button_text) || ($team_button_text)):?>
                  <div class="hmdoctor-btn">
                     <?php if($team_button_text):?>
                     <a class="gradient-btn" href="<?php echo $team_button_link; ?>"><?php echo $team_button_text ?></a>
                     <?php endif;?>
                     <?php if(($team_read_more_button_text) && (get_field('enable_details',$team_val->ID))):?>
                     <a class="border-btn" href="<?php echo get_the_permalink($team_val->ID);?>"><?php echo $team_read_more_button_text ?></a>
                     <?php endif;?>
                  </div>
                  <?php endif;?>
               </div>
            </div>
            <?php if(get_the_post_thumbnail_url($team_val->ID)): ?>
            <div class="col-lg-6 col-md-12 col-sm-12 hmdoctor-thumbcol">
               <div class="hmdoctor-thumb" data-aos="fade-left" data-aos-duration="3000">
                  <?php if(get_field('enable_details',$team_val->ID)):?>
                  <a href="<?php echo get_the_permalink($team_val->ID);?>"><img src="<?php echo get_the_post_thumbnail_url($team_val->ID); ?>" alt="<?php echo get_field('doctor_name',$team_val->ID); ?>" width="636" height="430" /></a>
                  <?php else:?>
                  <img src="<?php echo get_the_post_thumbnail_url($team_val->ID); ?>" alt="<?php echo get_field('doctor_name',$team_val->ID); ?>" width="636" height="430" />
                  <?php endif;?>
               </div>
            </div>
            <?php endif;?>
         </div>
         <?php endforeach;?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'discount_plans'):?>
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
<section class="hmdiscplan-section" <?php echo $style;?>>
   <div class="hmdiscplan-inner">
      <div class="container">
         <?php if((get_sub_field('discount_plans_title')) || (get_sub_field('discount_plans_sub_title'))):?>
         <div class="maintitle">
            <?php if(get_sub_field('discount_plans_title')):?>
            <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('discount_plans_title'); ?></h2>
            <?php endif;?>
            <?php if(get_sub_field('discount_plans_sub_title')):?>
            <p data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('discount_plans_sub_title'); ?></p>
            <?php endif;?>
         </div>
         <?php endif;?>
         <?php $discount_plans_list=get_sub_field('discount_plans_list');?>
         <?php if($discount_plans_list):?>
         <div class="row hmdiscplanlist hmdiscount-slider owl-carousel">
            <?php foreach ($discount_plans_list as $dis_val) :?>
            <div class="item col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-duration="2000">
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
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'promotion_plans'):?>
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
<section class="hmpromoplan-section" <?php echo $style; ?>>
   <div class="hmpromoplan-inner">
      <div class="container">
         <?php if((get_sub_field('promotion_plans_title')) || (get_sub_field('promotion_plans_sub_title'))):?>
         <div class="maintitle">
            <?php if(get_sub_field('promotion_plans_title')):?>
            <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('promotion_plans_title'); ?></h2>
            <?php endif;?>
            <?php if(get_sub_field('promotion_plans_sub_title')):?>
            <p data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('promotion_plans_sub_title'); ?></p>
            <?php endif;?>
         </div>
         <?php endif;?>
         <?php 
            $promotion_plans_list=get_sub_field('promotion_plans_list');
            $promotion_plans_curve=get_sub_field('promotion_plans_curve');
            ?>
         <?php if($promotion_plans_list):?>
         <div class="row hmpromoslist hmpromoplanslider owl-carousel">
            <?php foreach ($promotion_plans_list as $promo_val) :?>
            <div class="item col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-duration="2000">
               <a class="hmpromosbox" href="<?php echo $promo_val['link']; ?>" style="background-image: url(<?php echo $promotion_plans_curve['url']; ?>);">
                  <img src="<?php echo $promotion_plans_curve['url']; ?>" alt="<?php echo $promo_val['title']; ?>" width="303" height="248">
                  <div class="hmpromo-info">
                     <?php if($promo_val['title']):?>
                     <h3><?php echo $promo_val['title']; ?></h3>
                     <?php endif;?>
                     <?php if($promo_val['price']):?>
                     <div class="promoprice"><?php echo $promo_val['price']; ?></div>
                     <?php endif;?>
                     <?php if($promo_val['sub_title']):?>
                     <p><?php echo $promo_val['sub_title'];?></p>
                     <?php endif;?>
                  </div>
               </a>
            </div>
            <?php endforeach;?>
         </div>
         <?php endif;?>
      </div>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'call_us'):?>
<?php if(get_sub_field('use_call_us_section')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('call_us_section_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('call_us_section_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('call_us_section_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('call_us_section_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('call_us_section_background_color')) || (get_sub_field('call_us_section_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="hmcallus-section" <?php echo $style;?>>
   <div class="container">
   <?php  $call_us_section_lists=get_sub_field('call_us_section_lists');  ?>
   <div class="row hmcallusmain-row">
   <?php if($call_us_section_lists):?>
   <?php if((get_sub_field('call_us_section_title')) || (get_sub_field('call_us_section_description')) || (get_sub_field('call_us_section_button_text'))):?>
   <div class="col-lg-6 col-md-12 col-sm-12 hmcallus-leftcol">
      <?php else:?>
      <div class="col-lg-12 col-md-12 col-sm-12 hmcallus-leftcol">
         <?php endif;?>
         <div class="row hmcallusbox-list">
            <?php foreach ($call_us_section_lists as $call_val) :?>
            <div class="col-sm-6 col-12 item">
               <div class="hmcallusbox" data-aos="fade-up" data-aos-duration="3000">
                  <?php if($call_val['image']):?>
                  <div class="hmcallus-icon">
                     <img src="<?php echo $call_val['image']['url']; ?>" alt="<?php echo $call_val['title']; ?>" width="152" height="130" />
                  </div>
                  <?php endif;?>
                  <?php if($call_val['title']):?>
                  <h3><?php echo $call_val['title']; ?></h3>
                  <?php endif;?>
                  <?php if($call_val['sub_title']):?>
                  <p><?php echo $call_val['sub_title']; ?></p>
                  <?php endif;?>
               </div>
            </div>
            <?php endforeach;?>
         </div>
      </div>
      <?php endif;?>
      <?php if((get_sub_field('call_us_section_title')) || (get_sub_field('call_us_section_description')) || (get_sub_field('call_us_section_button_text'))):?>
      <?php if($call_us_section_lists):?>
      <div class="col-lg-6 col-md-12 col-sm-12 hmcallus-rightcol">
         <?php else:?>
         <div class="col-lg-12 col-md-12 col-sm-12 hmcallus-rightcol">
            <?php endif;?>
            <div class="hmcallus-desc" data-aos="fade-left" data-aos-duration="3000">
               <?php if(get_sub_field('call_us_section_title')):?>
               <div class="maintitle">
                  <h2><?php echo get_sub_field('call_us_section_title'); ?></h2>
               </div>
               <?php endif;?>
               <?php echo get_sub_field('call_us_section_description'); ?>
               <?php if(get_sub_field('call_us_section_button_text')):?>
               <div class="hmcallus-btn">
                  <a class="gradient-btn" href="<?php echo get_sub_field('call_us_section_button_link'); ?>"><?php echo get_sub_field('call_us_section_button_text'); ?></a>
               </div>
               <?php endif;?>
            </div>
         </div>
         <?php endif;?>
      </div>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'blog'):?>
<?php if(get_sub_field('use_blog')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('blog_section_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('blog_section_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('blog_section_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('blog_section_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('blog_section_background_color')) || (get_sub_field('blog_section_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="hmblog-section" <?php echo $style;?>>
   <div class="container">
      <?php if((get_sub_field('blog_title')) || (get_sub_field('blog_sub_title'))):?>
      <div class="maintitle">
         <?php if(get_sub_field('blog_title')):?>
         <?php if(get_sub_field('blog_title_url')):?>
         <a href="<?php echo get_sub_field('blog_title_url'); ?>">
            <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('blog_title'); ?></h2>
         </a>
         <?php else:?>
         <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('blog_title'); ?></h2>
         <?php endif;?>
         <?php endif;?>
         <?php if(get_sub_field('blog_sub_title')):?>
         <p data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('blog_sub_title'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <div class="row hmbloglist blogslider owl-carousel">
         <?php $readmore=get_sub_field('blog_read_more_button_text'); ?>
         <?php $pagenum = isset( $_REQUEST['pagenum'] ) ? intval( $_REQUEST['pagenum'] ) : 1; 
            $args = array(
               'post_status' => array('publish'),
               'post_type' => 'post',
               'orderby' => 'post_date',    //date,post_views_count
               'order'=>'DESC',
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
      </div>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'reviews'):?>
<?php if(get_sub_field('use_reviews')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('reviews_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('reviews_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('reviews_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('reviews_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('reviews_background_color')) || (get_sub_field('reviews_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<?php ?>
<section class="hmreview-section" <?php echo $style;?>>
   <div class="hmreview-inner">
   <div class="container">
      <div class="row">
         <?php if((get_sub_field('enable_review_image')) && (get_sub_field('review_image'))):?>
         <div class="col-lg-6 col-sm-12 hmreview-leftcol">
            <?php else:?>
            <div class="col-lg-12 col-sm-12 hmreview-leftcol">
               <?php endif;?>
               <?php if((get_field('pozative_reviews_title','option')) || (get_field('pozative_reviews_sub_title','option'))):?>
               <div class="maintitle">
                  <?php if(get_field('pozative_reviews_title','option')):?>
                  <h2 data-aos="fade-right" data-aos-duration="3000"><?php echo get_field('pozative_reviews_title','option'); ?></h2>
                  <?php endif;?>
                  <?php if(get_field('pozative_reviews_sub_title','option')):?>
                  <p data-aos="fade-right" data-aos-duration="3000"><?php echo get_field('pozative_reviews_sub_title','option'); ?></p>
                  <?php endif;?>
               </div>
               <?php endif;?>
               <?php if((get_field('pozative_review_script','option')) || (get_field('use_custom_reviews','option'))):?>
               <div class="hmreview-box" data-aos="fade-right" data-aos-duration="2000">
                  <?php if((get_field('use_custom_reviews','option')) && (get_field('custom_reviews_shortcode','option'))): ?>
                  <?php $shortcode=get_field('custom_reviews_shortcode','option');?>
                  <?php echo do_shortcode($shortcode); ?>
                  <?php else:?>
                  <?php echo get_field('pozative_review_script','option') ?>
                  <?php endif;?>
               </div>
               <?php endif;?>
            </div>
            <?php if((get_sub_field('enable_review_image')) && (get_sub_field('review_image'))):?>
            <div class="col-lg-6 col-sm-12 hmreview-imgcol">
               <div class="hmreview-img" data-aos="fade-left" data-aos-duration="2000" style="background-image: url(<?php echo get_sub_field('review_image')['sizes']['home-review-thumb']; ?>);">
                  <img src="<?php echo get_sub_field('review_image')['sizes']['home-review-thumb']; ?>" alt="What Our Clients Say" width="948" height="742" />
               </div>
            </div>
            <?php endif;?>
         </div>
      </div>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'gallery'):?>
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
<?php ?>
<section class="hmgallery-section" <?php echo $style;?>>
   <div class="container">
      <?php if((get_sub_field('gallery_title')) || (get_sub_field('gallery_sub_title'))):?>
      <div class="maintitle">
         <?php if(get_sub_field('gallery_title')):?>
         <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('gallery_title'); ?></h2>
         <?php endif;?>
         <?php if(get_sub_field('gallery_sub_title')):?>
         <p data-aos="fade-up" data-aos-duration="3000"><?php echo get_sub_field('gallery_sub_title'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <?php $gallery_images=get_sub_field('gallery_images'); ?>
      <?php if($gallery_images):?>
      <div class="hmgallery-slider" data-aos="fade-down" data-aos-duration="2000">
         <?php foreach ($gallery_images as $gal_val):?>
         <div class="item">
            <div class="hmgallerylarge-img">
               <img src="<?php echo $gal_val['sizes']['hmgallery-large-thumb']; ?>" alt="<?php echo $gal_val['alt']; ?>" width="1296" height="518" />
            </div>
         </div>
         <?php endforeach;?>
      </div>
      <div class="hmgalleryslider-nav" data-aos="fade-up" data-aos-duration="2000">
         <?php foreach ($gallery_images as $gal_small_val):?>
         <div class="item">
            <div class="hmgallery-thumb">
               <img src="<?php echo $gal_small_val['sizes']['hmgallery-small-thumb']; ?>" alt="<?php echo $gal_small_val['alt']; ?>"  width="416" height="166" />
            </div>
         </div>
         <?php endforeach;?>
      </div>
      <?php endif;?>
   </div>
</section>
<?php endif;?>
<?php elseif(get_row_layout() == 'extra_content'):?>
<?php if(get_sub_field('use_extra_content')): ?>  
<?php
   $extra_content_section=get_sub_field('extra_content_section');
   $extra_content_class=get_sub_field('extra_content_class');
   ?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_sub_field('extra_content_background_color')):?>
<?php $backcolor = 'background-color:'.get_sub_field('extra_content_background_color').';';?>
<?php endif; ?>
<?php if(get_sub_field('extra_content_background_image')):?>
<?php $backimg = 'background-image:url('.get_sub_field('extra_content_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_sub_field('extra_content_background_color')) || (get_sub_field('extra_content_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="extracontentsection <?php echo $extra_content_class; ?>" <?php echo $style;?>>
   <div class="container">
      <?php if((get_sub_field('extra_content_title')) || (get_sub_field('extra_content_sub_title'))):?>
      <div class="main-title">
         <?php if(get_sub_field('extra_content_title')):?>
         <h2><?php echo get_sub_field('extra_content_title'); ?></h2>
         <?php endif;?>
         <?php if(get_sub_field('extra_content_sub_title')):?>
         <div class="hmsubtitle"><?php echo get_sub_field('extra_content_sub_title'); ?></div>
         <?php endif;?>
      </div>
      <?php endif;?>
      <div class="row">
         <?php
            $count=count($extra_content_section);
            ?>
         <?php if($count==3): ?>
         <?php $classadd="col-lg-4 col-md-12 col-sm-12 col-xs-12 extrasec-col";?>
         <?php elseif($count==2):?>  
         <?php $classadd="col-lg-6 col-md-12 col-sm-12 col-xs-12 extrasec-halfcol";?>
         <?php else:?>
         <?php $classadd="col-lg-12 col-md-12 col-sm-12 col-xs-12";?>
         <?php endif;?>  
         <?php foreach ($extra_content_section as $key => $conedit_val) :?>
         <div class="<?php echo $classadd;?>">
            <?php if($conedit_val['title']): ?>
            <div class="main-title">
               <h2><?php echo $conedit_val['title']; ?></h2>
            </div>
            <?php endif;?>
            <?php if($conedit_val['editor']): ?>
            <div class="extraseccontent">
               <?php echo $conedit_val['editor']; ?>
            </div>
            <?php endif;?>
         </div>
         <?php endforeach;?>
      </div>
   </div>
</section>
<?php endif;?>
<?php endif;?>
<?php endwhile;?> 
<?php endif;?>
<?php get_footer();?>
<?php 
   /*
   Template for displaing content of single service in single-service.php file
   */
   ?>
   <?php $style=$backcolor=$backimg='';?>
   <?php if(get_field('service_details_page_background_color','option')):?>
   <?php $backcolor = 'background-color:'.get_field('service_details_page_background_color','option').';';?>
   <?php endif; ?>
   <?php if(get_field('service_details_page_background_image','option')):?>
   <?php $backimg = 'background-image:url('.get_field('service_details_page_background_image','option')['url'].');';?>
   <?php endif; ?>
   <?php if((get_field('service_details_page_background_color','option')) || (get_field('service_details_page_background_image','option'))): ?>
   <?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
   <?php endif;?>
<div class="servicedetail-content" <?php echo $style;?>>
         
<?php if((get_field('enable_banner_image')) && (get_field('banner_image'))): ?>
<section class="inner-banner" data-aos="fade-down" data-aos-duration="2000">
   <div class="innerbanner-img" style="background-image: url(<?php echo get_field('banner_image')['sizes']['inner-page-banner']; ?>);">
      <img src="<?php echo get_field('banner_image')['sizes']['inner-page-banner']; ?>" alt="<?php echo get_field('page_title'); ?>" width="1920" height="600" />
   </div>
</section>
<?php endif;?>

<?php if(get_field('use_service_image_slider')):?>
<?php  
   $slider=get_field('slider');
   $title_color=get_field('title_color');
   $sub_title_color=get_field('sub_title_color');
   
   
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
<?php $video_image = get_field('service_video_image'); ?>
<?php if(!empty(get_field('use_service_video'))): ?>
<?php if(get_field('use_html_video')):?>
<div class="indexvideo">
   <img class="indexvideoimage" src="<?php echo $video_image['sizes']['inner-page-banner']; ?>" alt="<?php echo $video_image['alt']; ?>" height="651" width="1920" />
   <video id="video-slider" class="video-js" poster="<?php echo $video_image['url']; ?>" preload="metadata" playsinline muted="true" loop autoplay>
      <?php if(!empty(get_field('mp4_link'))): ?>
      <source src="<?php echo get_field('mp4_link'); ?>" type="video/mp4">
      <?php endif; ?>
      <?php if(!empty(get_field('webm_link'))): ?>
      <source src="<?php echo get_field('webm_link'); ?>" type="video/webm">
      <?php endif; ?>
      <?php if(!empty(get_field('ogv_link'))): ?>
      <source src="<?php echo get_field('ogv_link'); ?>" type="video/ogg">
      <?php endif; ?>
   </video>
</div>
<?php endif; ?>
<?php if(get_field('use_youtube_iframe')):?>
<div class="indexvideo">
   <img class="indexvideoimage" src="<?php echo $video_image['sizes']['inner-page-banner']; ?>" alt="<?php echo $video_image['alt']; ?>" height="651" width="1920" />
   <?php echo get_field('youtube_iframe'); ?>
</div>
<?php endif; ?>
<?php endif; ?>

       <section class="servicemain-content">
            <div class="container">
              <?php if(get_field('page_title')):?>
              <div class="inner-title" data-aos="fade-left" data-aos-duration="2000">
                <h1><?php echo get_field('page_title'); ?></h1>
              </div>
           <?php endif;?>
           <?php if(get_field('description')):?>
              <div class="servicemain-desc" data-aos="fade-up" data-aos-duration="2000">
                <?php echo get_field('description'); ?>
              </div>
           <?php endif;?>
            </div>
          </section>
          
          <?php if(get_field('enable_other_services','option')):?>
            <?php $style=$backcolor=$backimg='';?>
<?php if(get_field('other_services_background_color','option')):?>
<?php $backcolor = 'background-color:'.get_field('other_services_background_color','option').';';?>
<?php endif; ?>
<?php if(get_field('other_services_background_image','option')):?>
<?php $backimg = 'background-image:url('.get_field('other_services_background_image','option')['url'].');';?>
<?php endif; ?>
<?php if((get_field('other_services_background_color','option')) || (get_field('other_services_background_image','option'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
          <section class="othrservice-section" <?php echo $style;?>>
            <div class="container">
 <?php if((get_field('other_services_title','option')) || (get_field('other_services_sub_title','option'))):?>
      <div class="maintitle">
         <?php if(get_field('other_services_title','option')):?>
         <h1 data-aos="fade-down" data-aos-duration="2000"><?php echo get_field('other_services_title','option'); ?></h1>
         <?php endif;?>
         <?php if(get_field('other_services_sub_title','option')):?>
         <p data-aos="fade-up" data-aos-duration="2000"><?php echo get_field('other_services_sub_title','option'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <?php   
      $select_other_services=get_field('select_other_services','option');
      $other_services_read_more_button_text=get_field('other_services_read_more_button_text','option');
      $currentid=get_the_ID();
      ?>
      <?php if($select_other_services):?>
              <div class="row hmservicelist othrerviceslider owl-carousel">
                <?php foreach ($select_other_services as $sel_ser) :?>
                  <?php if($currentid != $sel_ser->ID):?>
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
               <?php if($other_services_read_more_button_text):?>
               <div class="hmservicebox-btn">
                  <a class="border-btn" href="<?php echo get_the_permalink($sel_ser->ID); ?>"><?php echo $other_services_read_more_button_text; ?></a>
               </div>
               <?php endif;?>
            </div>
              </div>
           <?php endif;?>
           <?php endforeach;?>
            </div>
         <?php endif;?>
      </div>
          </section>
       <?php endif;?>
<?php 
   $services_discount_plans=get_field('services_discount_plans','option');
   $services_promotion_plans=get_field('services_promotion_plans','option');
   ?>
    
       <?php if($services_discount_plans['use_discount_plans']):?>
<?php $style=$backcolor=$backimg='';?>
<?php if($services_discount_plans['discount_plans_background_color']):?>
<?php $backcolor = 'background-color:'.$services_discount_plans['discount_plans_background_color'].';';?>
<?php endif; ?>
<?php if($services_discount_plans['discount_plans_background_image']):?>
<?php $backimg = 'background-image:url('.$services_discount_plans['discount_plans_background_image']['url'].');';?>
<?php endif; ?>
<?php if(($services_discount_plans['discount_plans_background_color']) || ($services_discount_plans['discount_plans_background_image'])): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="hmdiscplan-section" <?php echo $style;?>>
   <div class="hmdiscplan-inner">
      <div class="container">
         <?php if(($services_discount_plans['discount_plans_title']) || ($services_discount_plans['discount_plans_sub_title'])):?>
         <div class="maintitle">
         <?php if($services_discount_plans['discount_plans_title']):?>
            <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo $services_discount_plans['discount_plans_title']; ?></h2>
            <?php endif;?>
            <?php if($services_discount_plans['discount_plans_sub_title']):?>
            <p data-aos="fade-up" data-aos-duration="3000"><?php echo $services_discount_plans['discount_plans_sub_title']; ?></p>
            <?php endif;?>
         </div>
         <?php endif;?>
         <?php $discount_plans_list=$services_discount_plans['discount_plans_list'];?>
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

<?php if($services_promotion_plans['use_promotion_plans']):?>
<?php $style=$backcolor=$backimg='';?>
<?php if($services_promotion_plans['promotion_plans_background_color']):?>
<?php $backcolor = 'background-color:'.$services_promotion_plans['promotion_plans_background_color'].';';?>
<?php endif; ?>
<?php if($services_promotion_plans['promotion_plans_background_image']):?>
<?php $backimg = 'background-image:url('.$services_promotion_plans['promotion_plans_background_image']['url'].');';?>
<?php endif; ?>
<?php if(($services_promotion_plans['promotion_plans_background_color']) || ($services_promotion_plans['promotion_plans_background_image'])): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="hmpromoplan-section" <?php echo $style; ?>>
   <div class="hmpromoplan-inner">
      <div class="container">
         <?php if(($services_promotion_plans['promotion_plans_title']) || ($services_promotion_plans['promotion_plans_sub_title'])):?>
         <div class="maintitle">
         <?php if($services_promotion_plans['promotion_plans_title']):?>
            <h2 data-aos="fade-up" data-aos-duration="3000"><?php echo $services_promotion_plans['promotion_plans_title']; ?></h2>
            <?php endif;?>
            <?php if($services_promotion_plans['promotion_plans_sub_title']):?>
            <p data-aos="fade-up" data-aos-duration="3000"><?php echo $services_promotion_plans['promotion_plans_sub_title']; ?></p>
            <?php endif;?>
         </div>
         <?php endif;?>
         <?php 
            $promotion_plans_list=$services_promotion_plans['promotion_plans_list'];
            $promotion_plans_curve=$services_promotion_plans['promotion_plans_curve'];
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

       <?php if(get_field('use_extra_content')): ?>  
<?php
   $extra_content_section=get_field('extra_content_section');
   $extra_content_class=get_field('extra_content_class');
   ?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_field('extra_content_background_color')):?>
<?php $backcolor = 'background-color:'.get_field('extra_content_background_color').';';?>
<?php endif; ?>
<?php if(get_field('extra_content_background_image')):?>
<?php $backimg = 'background-image:url('.get_field('extra_content_background_image')['url'].');';?>
<?php endif; ?>
<?php if((get_field('extra_content_background_color')) || (get_field('extra_content_background_image'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="extracontentsection <?php echo $extra_content_class; ?>" <?php echo $style;?>>
   <div class="container">
      <?php if((get_field('extra_content_title')) || (get_field('extra_content_sub_title'))):?>
      <div class="main-title">
         <?php if(get_field('extra_content_title')):?>
         <h2><?php echo get_field('extra_content_title'); ?></h2>
         <?php endif;?>
         <?php if(get_field('extra_content_sub_title')):?>
         <div class="hmsubtitle"><?php echo get_field('extra_content_sub_title'); ?></div>
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
        </div>
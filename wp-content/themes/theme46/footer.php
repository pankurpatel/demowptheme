<?php
   /**
   * The template for displaying the footer
   *
   * Contains the closing of the #content div and all content after.
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   *
   * @package Theme46
   */
   
   
   global $footer_logo,$address,$fax,$address_link,$email_id,$phone_number,$social_links,$footer_settings,$working_hours,$hours_title,$hours_Sub_title,$addtext,$hours_note,$footer_pages_display_settings,$mobile_settings,$footer_form,$googlemap_url,$map_image,$phonetxt,$faxtxt,$emailtxt;
   $footer_logo=get_field('footer_logo','option')['url'];
   $phone_number=get_field('phone_number','option');
   $address=get_field('address','option');
   $email_id=get_field('email_id','option');
   $address_link=get_field('address_link','option');
   $fax=get_field('fax_number','option');
   $phonetxt=get_field('phone_title','option');
   $addtext=get_field('address_title','option');
   $faxtxt=get_field('fax_title','option');
   $emailtxt=get_field('email_title','option');
   $social_links=get_field('social_links','option');
   $hours_note=get_field('working_hours_note','option');
   $hours_title = get_field('working_hours_title','option');
   $hours_Sub_title = get_field('working_hours_sub_title','option');
   $working_hours = get_field('working_hours','option');
   $footer_form_section_style = get_field('footer_form_section_style','option');
   $footer_settings = get_field('footer_settings','option');
   $footer_pages_display_settings = get_field('footer_page_display_settings','option');
   $mobile_settings = get_field('mobile_settings','option');
   $footer_form = get_field('footer_form', 'option' );
   $googlemap_url=get_field('map_address_url','option');
   $about_us_menu=get_field('about_us_menu','option');
   $services_menu=get_field('services_menu','option');
   
   
   ?>
</div>
<?php if(($footer_settings['custom_footer_enable_disable']) && ($footer_settings['custom_footer_editor'])):?>
<?php echo $footer_settings['custom_footer_editor']; ?>
<?php else :?>
<footer id="footer">
   <?php if((!is_singular('location')) && (!is_page_template('template-parts/template-find-locations.php')) && (!is_page('check-in-online')) && (!is_page('contact-us'))):?>
   <?php if(($footer_form['enable_footer_form']) || ($footer_pages_display_settings['enable_footer_hours'])):?>
   <div class="footform-section">
   <div class="footform-inner">
      <div class="container">
         <div class="row footformhour-row">
            <?php if($footer_form['enable_footer_form']):?>
            <?php if(($footer_pages_display_settings['enable_footer_hours']) && ($working_hours) && (empty(get_field('enable_multiple_locations','option')))):?>
            <div class="col-lg-6 col-sm-12 footform-col">
               <?php elseif((get_field('enable_single_location','option')) && (!$footer_pages_display_settings['enable_footer_hours'])):?>
               <div class="col-lg-12 col-sm-12 footform-col fullfoot-formcol">
                  <?php elseif((get_field('enable_multiple_locations','option')) && (empty(get_field('enable_single_location','option')))):?>
                  <div class="col-lg-12 col-sm-12 footform-col fullfoot-formcol">
                     <?php endif;?>
                     <div class="footform-block" data-aos="fade-right" data-aos-duration="2000">
                        <?php if(($footer_form['footer_form_title']) || ($footer_form['footer_form_sub_title'])):?>
                        <div class="maintitle">
                           <?php if($footer_form['footer_form_title']):?>
                           <h2><?php echo $footer_form['footer_form_title']; ?></h2>
                           <?php endif;?>
                           <?php if($footer_form['footer_form_sub_title']):?>
                           <p><?php echo $footer_form['footer_form_sub_title']; ?></p>
                           <?php endif;?>
                        </div>
                        <?php endif;?>
                        <div class="footform">
                           <?php if(!empty($footer_form['select_contact_form_for_footer'])):?>
                           <?php $shortcode = sprintf("[contact-form-7 id=%1s]",$footer_form['select_contact_form_for_footer'] ); ?>
                           <?php  echo do_shortcode($shortcode);?>      
                           <?php endif;?>
                           <?php if(!empty($footer_form['adit_web_form_for_footer'])):?>
                           <?php echo $footer_form['adit_web_form_for_footer']; ?>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
                  <?php endif;?>
                  <?php if(get_field('enable_single_location','option')):?>
                  <?php if(($footer_pages_display_settings['enable_footer_hours']) && ($working_hours)):?>
                  <div class="col-lg-6 col-sm-12 foothour-col">
                     <div class="foothour-block" data-aos="fade-left" data-aos-duration="2000">
                        <?php if(($hours_title) || ($hours_Sub_title)):?>
                        <div class="maintitle">
                           <?php if($hours_title):?>
                           <h2><?php echo $hours_title; ?></h2>
                           <?php endif;?>
                           <?php if($hours_Sub_title):?>
                           <p><?php echo $hours_Sub_title; ?></p>
                           <?php endif;?>
                        </div>
                        <?php endif;?>
                        <div class="foothours">
                           <ul class="foothourslist clearfix">
                              <?php foreach ($working_hours as $hours_val) :?>   
                              <li>
                                 <span class="hoursday"><?php echo $hours_val['day']; ?></span>
                                 <span class="hourstime"><?php echo $hours_val['opening_time']; ?><?php if($hours_val['closing_time']): ?> - <?php echo $hours_val['closing_time']; ?> <?php endif;?></span>
                              </li>
                              <?php endforeach;?>
                              <?php if($hours_note):?>
                              <li class="hoursnote"><?php echo $hours_note; ?></li>
                              <?php endif;?>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <?php endif;?>
                  <?php endif;?>
               </div>
            </div>
         </div>
      </div>
      <?php endif;?> 
      <?php endif;?>
      <?php if(get_field('enable_single_location','option')):?>
      <?php if($googlemap_url):?>        
      <div class="footmap-block">
         <div class="footer-map" data-aos="zoom-in" data-aos-duration="3000">
            <?php echo $googlemap_url;?>
         </div>
      </div>
      <?php endif;?>
      <?php endif;?>
      <?php if(get_field('enable_single_location','option')):?>
      <div class="footer-inner">
         <div class="footerinner-block" data-aos="zoom-in" data-aos-duration="3000">
            <div class="container">
               <div class="row footerinner-row">
                  <?php  
                     $eam=$about_us_menu['enable_disable_about_us_menu'];
                     $esm=$services_menu['enable_disable_services_menu'];
                     $efa=$footer_pages_display_settings['enable_footer_address'];
                     $efp=$footer_pages_display_settings['enable_footer_phone'];
                     ?>
                  <?php 
                     if((($efa) || ($efp)) && ($eam) && ($esm))
                     {
                      $locationclass="col-xl-3 col-lg-4 col-sm-6 footloc-col";
                      $aboutmenuclass="col-xl-3 col-lg-3 col-sm-6 footmenu-col footlink-col";
                      $servmenuclass="col-xl-6 col-lg-5 col-sm-12 footmenu-col footservice-col";
                     }
                     elseif((($efa) || ($efp)) && ($eam) && (!$esm))
                     {
                      $locationclass="col-xl-6 col-lg-6 col-sm-6 footloc-col";
                      $aboutmenuclass="col-xl-6 col-lg-6 col-sm-6 footmenu-col footlink-col";
                      $servmenuclass="";
                     }
                     elseif((($efa) || ($efp)) && (!$eam) && ($esm))
                     {
                      $locationclass="col-xl-6 col-lg-6 col-sm-6 footloc-col";
                      $aboutmenuclass="";
                      $servmenuclass="col-xl-6 col-lg-6 col-sm-12 footmenu-col footservice-col";
                     }
                     elseif((($efa) || ($efp)) && (!$eam) && (!$esm))
                     {
                      $locationclass="col-xl-12 col-lg-12 col-sm-6 footloc-col";
                      $aboutmenuclass="";
                      $servmenuclass="";
                     }
                     elseif(((!$efa) && (!$efp)) && ($eam) && ($esm))
                     {
                      $locationclass="";
                      $aboutmenuclass="col-xl-6 col-lg-6 col-sm-6 footmenu-col footlink-col";
                      $servmenuclass="col-xl-6 col-lg-6 col-sm-12 footmenu-col footservice-col";
                     }
                     elseif(((!$efa) && (!$efp)) && ($eam) && (!$esm))
                     {
                      $locationclass="";
                      $aboutmenuclass="col-xl-12 col-lg-12 col-sm-6 footmenu-col footlink-col";
                      $servmenuclass="";
                     }
                     elseif(((!$efa) && (!$efp)) && (!$eam) && ($esm))
                     {
                      $locationclass="";
                      $aboutmenuclass="";
                      $servmenuclass="col-xl-12 col-lg-12 col-sm-12 footmenu-col footservice-col";
                     }
                     ?>
                  <?php if(($footer_pages_display_settings['enable_footer_address']) || ($footer_pages_display_settings['enable_footer_phone'])):?>
                  <div class="<?php echo $locationclass; ?>">
                     <?php if($addtext):?>
                     <h3 class="footcol-title"><?php echo $addtext; ?></h3>
                     <?php endif;?>
                     <div class="footcontact-info">
                        <?php if(($address) && ($footer_pages_display_settings['enable_footer_address'])):?>
                        <div class="footinfo-text foot-adderss">
                           <a href="<?php echo $address_link; ?>" target="_blank"><i class="fas fa-map-marker-alt"></i><?php echo $address; ?></a>
                        </div>
                        <?php endif;?>
                        <?php if(($email_id) && ($footer_pages_display_settings['enable_footer_email'])):?>
                        <div class="footinfo-text foot-mail">
                           <a href="mailto:<?php echo $email_id; ?>"><i class="fa fa-envelope"></i><?php echo $email_id; ?></a>
                        </div>
                        <?php endif;?>
                        <?php if(($phone_number) && ($footer_pages_display_settings['enable_footer_phone'])):?>
                        <div class="footinfo-text foot-phone">
                           <a href="tel:<?php echo $phone_number; ?>"><i class="fas fa-phone"></i><?php echo $phone_number;?></a>
                        </div>
                        <?php endif;?>
                        <?php if(($fax) && ($footer_pages_display_settings['enable_footer_fax'])):?>
                        <div class="footinfo-text foot-fax">
                           <span><i class="fas fa-fax"></i><?php echo $fax; ?></span>
                        </div>
                        <?php endif;?>
                     </div>
                     <?php if(($social_links) && ($footer_pages_display_settings['enable_footer_social_icons'])): ?>
                     <div class="foot-social">
                        <ul class="socialmedia">
                           <?php foreach ($social_links as $soc_val):?>
                           <li><a href="<?php echo $soc_val['social_link_url'];?>" target="_blank" ><i class="<?php echo $soc_val['social_icon_class'];?>"></i></a></li>
                           <?php endforeach;?>
                        </ul>
                     </div>
                     <?php endif;?>
                  </div>
                  <?php endif;?>
                  <?php if(($about_us_menu['enable_disable_about_us_menu']) && ($about_us_menu['about_us_menu_shortcode'])):?>
                  <div class="<?php echo $aboutmenuclass; ?>">
                     <?php if($about_us_menu['about_us_menu_title']):?>
                     <h3 class="footcol-title footmenu-toggle"><?php echo $about_us_menu['about_us_menu_title']; ?></h3>
                     <?php endif;?>
                     <div class="footmenu">
                        <?php echo do_shortcode($about_us_menu['about_us_menu_shortcode']);?>
                     </div>
                  </div>
                  <?php endif;?>
                  <?php if(($services_menu['enable_disable_services_menu']) && ($services_menu['services_menu_shortcode'])):?>
                  <div class="<?php echo $servmenuclass; ?>">
                     <?php if($services_menu['services_menu_title']):?>
                     <h3 class="footcol-title footmenu-toggle"><?php echo $services_menu['services_menu_title']; ?></h3>
                     <?php endif;?>
                     <div class="footmenu footservice">
                        <?php echo do_shortcode($services_menu['services_menu_shortcode']);?>
                     </div>
                  </div>
                  <?php endif;?>
               </div>
            </div>
         </div>
      </div>
      <?php endif;?>
      <?php if(get_field('enable_multiple_locations','option')):?>
      <?php if((!is_singular('location')) && (!is_page_template('template-parts/template-find-locations.php'))):?>
      <?php
         $multiple_locations_header_footer = get_field('multiple_location_header_footer','option');
         $multi_location_footer_short_code_title = $multiple_locations_header_footer['multi_location_footer_short_code_title'];
         $multi_location_footer_short_code_Sub_title = $multiple_locations_header_footer['multi_location_footer_short_code_sub_title'];
         $multi_location_footer_short_code = $multiple_locations_header_footer['multi_location_footer_short_code'];
         $enable_footer_multi_find_location_bar = $multiple_locations_header_footer['enable_footer_multi_find_location_bar'];
         $footer_location_details = $multiple_locations_header_footer['footer_location_list'];
         $footer_location_details_enable = $multiple_locations_header_footer['footer_location_details_enable'];
         $multi_location_footer_back_color = $multiple_locations_header_footer['multi_location_footer_back_color'];
         $multi_location_footer_back_image = $multiple_locations_header_footer['multi_location_footer_back_image']['url'];
         $footer_location_details_back_color = $multiple_locations_header_footer['footer_location_details_back_color'];
         ?>
      <?php if(($enable_footer_multi_find_location_bar) || ($footer_location_details_enable)):?>
      <div class="footmultiloc-section">
         <div class="container">
            <?php if(($enable_footer_multi_find_location_bar) && ($multi_location_footer_short_code)):?>
            <div class="footfind-locbar">
               <?php if($multi_location_footer_short_code_title):?>
               <div class="maintitle" data-aos="fade-down" data-aos-duration="2000">
                  <h2><?php echo $multi_location_footer_short_code_title; ?></h2>
               </div>
               <?php endif;?>
               <div class="footmultiloc-search" data-aos="fade-up" data-aos-duration="2000">
                  <div class="findlocsearch-bar">
                     <?php echo do_shortcode($multi_location_footer_short_code); ?>
                  </div>
               </div>
            </div>
            <?php endif;?>
            <?php if(($footer_location_details_enable) && ($footer_location_details)):?>
            <div class="footmultiloc-block">
               <?php if($multiple_locations_header_footer['footer_location_details_title']):?>
               <div class="maintitle" data-aos="fade-down" data-aos-duration="2000">
                  <h2><?php echo $multiple_locations_header_footer['footer_location_details_title']; ?></h2>
               </div>
               <?php endif;?>
               <div class="row footloclist-row">
                  <?php foreach ($footer_location_details as $loc_val): ?>
                  <?php 
                     $loc_link=get_the_permalink($loc_val->ID);
                     $loc_title=get_field('title',$loc_val->ID);
                     $loc_add=get_field('address',$loc_val->ID);
                     $loc_phone=get_field('phone_number',$loc_val->ID);
                     $loc_add_url=get_field('address_url',$loc_val->ID);
                     $loc_hours=get_field('location_working_hours',$loc_val->ID);
                     $loc_work_hours=$loc_hours['working_hours'];      
                     ?>
                  <div class="col-lg-4 col-sm-6 item" data-aos="fade-up" data-aos-duration="2000">
                     <div class="footmultiloc-box">
                        <div class="footmultiloc-info">
                           <?php if($loc_title):?>
                           <h3><a href="<?php echo $loc_link;?>"><?php echo $loc_title; ?></a></h3>
                           <?php endif;?>
                           <?php if($loc_add):?>
                           <div class="footmultiloc-address">
                              <a href="<?php echo $loc_add_url; ?>" target="_blank"><?php echo $loc_add; ?></a>
                           </div>
                           <?php endif;?>
                           <?php if($loc_phone):?>
                           <div class="footmultiloc-phone">
                              <a href="tel:<?php echo $loc_phone; ?>"><?php echo $loc_phone;?></a>
                           </div>
                           <?php endif;?>
                        </div>
                        <?php if((get_field('enable_disable_location_working_hours',$loc_val->ID)) && ($loc_work_hours)):?>
                        <div class="foothours footmultiloc-hours">
                           <?php if($loc_hours['working_hours_title']):?>
                           <h3><?php echo $loc_hours['working_hours_title'];  ?></h3>
                           <?php endif;?>
                           <ul class="foothourslist clearfix">
                              <?php foreach ($loc_work_hours as $lochr_val):?>
                              <li>
                                 <span class="footday"><?php echo $lochr_val['day']; ?></span>
                                 <span class="foottime"><?php echo $lochr_val['opening_time']; ?><?php if($lochr_val['closing_time']): ?> - <?php echo $lochr_val['closing_time']; ?><?php endif;?></span>
                              </li>
                              <?php endforeach;?>
                              <?php if($loc_hours['working_hours_note']):?>
                              <li class="hoursnote"><?php echo $loc_hours['working_hours_note']; ?></li>
                              <?php endif;?>                     
                           </ul>
                        </div>
                        <?php endif;?>
                     </div>
                  </div>
                  <?php endforeach;?>
               </div>
            </div>
            <?php endif;?>
         </div>
      </div>
      <?php endif;?>
      <?php if((get_field('simple_location_enable', 1024)) || ((get_field('multi_location_enable', 1024)))):?>
      <div class="footmap-block">
         <div class="footer-map" data-aos="zoom-in" data-aos-duration="3000">
            <?php if(get_field('simple_location_enable', 1024)):?>
            <?php echo get_field('simple_location_map', 1024); ?>
            <?php else:?>
            <?php echo do_shortcode(get_field('multi_location_map_shortcode', 1024)); ?>
            <?php endif;?>
         </div>
      </div>
      <?php endif;?>
      <?php if($multiple_locations_header_footer['enable_disable_footer_services_menu_promotion_sections']):?>
      <?php 
         $enable_disable_footer_services=$multiple_locations_header_footer['enable_disable_footer_services'];
         $footer_services_section=$multiple_locations_header_footer['footer_services_section'];
         $footer_service_list=$footer_services_section['footer_service_list'];
         ?> 
      <?php 
         $enable_disable_footer_menu_section=$multiple_locations_header_footer['enable_disable_footer_menu_section'];
         $footer_menu_section=$multiple_locations_header_footer['footer_menu_section'];
         $footer_menu=$footer_menu_section['footer_menu'];
         ?>
      <?php 
         $enable_disable_footer_promotion_section=$multiple_locations_header_footer['enable_disable_footer_promotion_section'];
         $footer_promotion_section=$multiple_locations_header_footer['footer_promotion_section'];
         $footer_promotion_plans=$footer_promotion_section['footer_promotion_plans'];
        $footer_promotion_plan_shape=$footer_promotion_section['footer_promotion_plan_shape'];

         
         ?>
      <?php   
         $fmm=$enable_disable_footer_menu_section;
         $fms=$enable_disable_footer_services;
         $fmp=$enable_disable_footer_promotion_section;
         
         ?>
      <?php 
         if(($fmm) && ($fms) && ($fmp))
         {
          $fmenuclass="col-xl-3 col-lg-3 col-sm-6 footmenu-col footlink-col";
          $fserclass="col-xl-6 col-lg-5 col-sm-12 footmenu-col footservice-col";
          $fpromoclass="col-xl-3 col-lg-4 col-sm-6 footpromo-col";
         }
         elseif(($fmm) && (!$fms) && ($fmp))
         {
          $fmenuclass="col-xl-6 col-lg-6 col-sm-6 footmenu-col footlink-col";
          $fserclass="";
          $fpromoclass="col-lg-6 col-md-6 col-sm-7 footpromo-col";
         }
         elseif(($fmm) && ($fms) && (!$fmp))
         {
          $fmenuclass="col-xl-6 col-lg-6 col-sm-6 footmenu-col footlink-col";
          $fserclass="col-xl-6 col-lg-6 col-sm-12 footmenu-col footservice-col";
          $fpromoclass="";
         }
         elseif(($fmm) && (!$fms) && (!$fmp))
         {
          $fmenuclass="col-xl-12 col-lg-12 col-sm-12 footmenu-col footlink-col";
          $fserclass="";
          $fpromoclass="";
         }
         if((!$fmm) && ($fms) && ($fmp))
         {
          $fmenuclass="";
          $fserclass="col-xl-6 col-lg-6 col-sm-12 footmenu-col footservice-col";
          $fpromoclass="col-xl-6 col-lg-6 col-sm-6 footpromo-col";
         }
         if((!$fmm) && ($fms) && (!$fmp))
         {
          $fmenuclass="";
          $fserclass="col-xl-12 col-lg-12 col-sm-12 footmenu-col footservice-col";
          $fpromoclass="";
         }
         if((!$fmm) && (!$fms) && ($fmp))
         {
          $fmenuclass="";
          $fserclass="";
          $fpromoclass="col-xl-12 col-lg-12 col-sm-12 footpromo-col";
         }
         
         ?>
      <div class="footer-inner">
         <div class="footerinner-block" data-aos="zoom-in" data-aos-duration="3000">
            <div class="container">
               <div class="row footerinner-row multifootinner-row">
                  <?php if($enable_disable_footer_menu_section):?>
                  <div class="<?php echo $fmenuclass;?>">
                     <?php if($footer_menu_section['footer_menu_title']): ?>
                     <h3 class="footcol-title footmenu-toggle"><?php echo $footer_menu_section['footer_menu_title']; ?></h3>
                     <?php endif;?>
                     <div class="footmenu">
                        <ul>
                           <?php foreach ($footer_menu as $foot_menu):?>
                           <li><a href="<?php echo $foot_menu['menu_link']; ?>"><?php echo $foot_menu['menu_title']; ?></a></li>
                           <?php endforeach;?> 
                        </ul>
                     </div>
                  </div>
                  <?php endif;?>
                  <?php if($enable_disable_footer_services):?>
                  <div class="<?php echo $fserclass;?>">
                     <?php if($footer_services_section['footer_services_title']): ?>
                     <h3 class="footcol-title footmenu-toggle"><?php echo $footer_services_section['footer_services_title']; ?></h3>
                     <?php endif;?>
                     <div class="footmenu footservice">
                        <ul>
                           <?php foreach ($footer_service_list as $foot_serv): ?>
                           <li><a href="<?php echo get_the_permalink($foot_serv->ID); ?>"><?php echo get_field('title',$foot_serv->ID); ?></a></li>
                           <?php endforeach;?>
                        </ul>
                     </div>
                  </div>
                  <?php endif;?>
                  <?php if(($enable_disable_footer_promotion_section) && ($footer_promotion_plans)):?>
                  <div class="<?php echo $fpromoclass;?>">
                     <?php if($footer_promotion_plans['footer_promotion_plans_title']): ?>
                     <h3 class="footcol-title footmenu-toggle"><?php echo $footer_promotion_plans['footer_promotion_plans_title']; ?></h3>
                     <?php endif;?>
                     <?php foreach ($footer_promotion_plans as $foot_plans):?>
                     <div class="footpromo-box">
                        <a class="hmpromosbox" href="<?php echo $foot_plans['link']; ?>" <?php if($footer_promotion_plan_shape):?> style="background-image: url(<?php echo $footer_promotion_plan_shape['url']; ?>);"<?php endif;?>>
                           <?php if($footer_promotion_plan_shape):?>
                           <img src="<?php echo $footer_promotion_plan_shape['url']; ?>" alt="<?php echo $footer_promotion_plan_shape['alt']; ?>" width="303" height="248" />
                        <?php endif;?>
                           <div class="hmpromo-info">
                              <?php if($foot_plans['title']):?>
                              <h3><?php echo $foot_plans['title'];?></h3>
                              <?php endif;?>
                              <?php if($foot_plans['price']):?>
                              <div class="promoprice"><?php echo $foot_plans['price']; ?></div>
                              <?php endif;?>
                              <?php if($foot_plans['sub_title']):?>
                              <p><?php echo $foot_plans['sub_title']; ?></p>
                              <?php endif;?>
                           </div>
                        </a>
                     </div>
                     <?php endforeach;?>
                  </div>
                  <?php endif;?>
               </div>
            </div>
         </div>
      </div>
      <?php endif;?>
      <?php endif;?>
      <?php endif;?>
      <?php if(get_field('copyright','option')):?>
      <div class="footcopy">
         <div class="container">
            <p>&#169;<?php echo date('Y');
               echo '&nbsp;';
               echo get_field('copyright', 'option'); ?></p>
         </div>
      </div>
      <?php endif;?>
      <?php if (get_field('enable_multiple_locations', 'option')): ?>
      <?php if (!empty($mobile_settings['mobile_contact_number']) || !empty($mobile_settings['mobile_book_an_appointment_title'])): ?>
      <?php if (!empty($mobile_settings['mobile_contact_number']) && !empty($mobile_settings['mobile_book_an_appointment_title'])): ?>
      <?php $btnclass = " mobiletwobtn";?>
      <?php endif;?>
      <div class="mobilefixed-btmbtn">
         <div class="mobilefootcall<?php echo $btnclass; ?>">
            <?php if (!empty($mobile_settings['mobile_contact_number'])): ?>
            <a class="mobilecallnow" href="#myModallocationcon" data-bs-toggle="modal" data-bs-target="#myModallocationcon"><i class="fas fa-phone"></i> <?php echo $mobile_settings['mobile_contact_number_title']; ?></a>
            <?php endif;?>
            <?php if (!empty($mobile_settings['mobile_book_an_appointment_title'])): ?>
            <a class="mobilebookbtn" href="<?php echo $mobile_settings['mobile_book_an_appointment_url']; ?>"><?php echo $mobile_settings['mobile_book_an_appointment_title']; ?></a>
            <?php endif;?>
         </div>
      </div>
      <?php endif;?>
      <div class="bs-example">
         <div id="myModallocationcon" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Call Now</h4>
                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                  </div>
                  <div class="modal-body">
                     <?php $loop = new WP_Query(array('post_type' => 'location', 'posts_per_page' => -1));?>
                     <?php while ($loop->have_posts()): $loop->the_post();?>
                     <?php
                        $location_link = get_permalink();
                        $location_title = get_field('title');
                        $location_phone = get_field('phone_number');
                        $location_address = get_field('address')
                        ?>
                     <div class="multimodel">
                        <a class="multimodeltitle" href="<?php echo $location_link; ?>" rel="noreferrer" target="_blank"><?php echo $location_title; ?></a>
                        - <a href="tel:<?php echo $location_phone; ?>"><?php echo $location_phone; ?></a>
                     </div>
                     <?php endwhile;
                        wp_reset_query();
                        ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php else: ?>
      <?php if (!empty($mobile_settings['mobile_contact_number']) || !empty($mobile_settings['mobile_book_an_appointment_title'])): ?>
      <?php if (!empty($mobile_settings['mobile_contact_number']) && !empty($mobile_settings['mobile_book_an_appointment_title'])): ?>
      <?php $btnclass = " mobiletwobtn";?>
      <?php endif;?>
      <div class="mobilefixed-btmbtn">
         <div class="mobilefootcall <?php echo $btnclass; ?>">
            <?php if (!empty($mobile_settings['mobile_contact_number'])): ?>
            <a class="mobilecallnow" href="tel:<?php echo $mobile_settings['mobile_contact_number']; ?>"><i class="fas fa-phone"></i>
            <?php echo $mobile_settings['mobile_contact_number_title']; ?>
            </a>
            <?php endif;?>
            <?php if (!empty($mobile_settings['mobile_book_an_appointment_title'])): ?>
            <a class="mobilebookbtn" href="<?php echo $mobile_settings['mobile_book_an_appointment_url']; ?>">
            <?php echo $mobile_settings['mobile_book_an_appointment_title']; ?>
            </a>
            <?php endif;?>
         </div>
      </div>
      <?php endif;?>
      <?php endif;?>
</footer>
<?php endif;?>
<!-- End Footer -->
</div>
<?php wp_footer(); ?>
<?php if (get_field('custom_chat_code','option')): ?>
<?php echo get_field('custom_chat_code','option'); ?>
<?php endif; ?>
<?php if (get_field('call_rail_script','option')): ?>
<?php echo get_field('call_rail_script','option'); ?>
<?php endif; ?>
</body>
</html>
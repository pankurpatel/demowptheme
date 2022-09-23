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
   
    
$logo_link=$generalcontent['logo_link_enable_disable'];
$generalcontent=get_field('general_content');
$mobile_settings_enable_disable=$generalcontent['mobile_footer_bottom_settings_enable_disable'];
$mobile_settings=$generalcontent['mobile_footer_bottom_settings'];
$footer_bgcolor=$generalcontent['footer_bg_color'];
$footer_bgimg=$generalcontent['footer_bg_image']['url'];
$formcolor = $generalcontent['landing_footer_bg_color'];
$formbgimg = $generalcontent['landing_footer_bg_image']['url']; 
   
   
?>
</div>
   <?php $style=$backcolor=$backimg='';?>
<?php if($footer_bgcolor):?>
<?php $backcolor = 'background-color:'.$footer_bgcolor.';';?>
<?php endif; ?>
<?php if($footer_bgimg):?>
<?php $backimg = 'background-image:url('.$footer_bgimg.');';?>
<?php endif; ?>
<?php if(($footer_bgcolor) || ($footer_bgimg)): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<footer id="footer" <?php echo $style;?>>
   <?php if(($generalcontent['enable_footer_form']) || ($generalcontent['enable_footer_hours'])):?>
   <div class="footform-section">
   <div class="footform-inner">
      <div class="container">
         <div class="row footformhour-row">
            <?php if($generalcontent['enable_footer_form']):?>
         <?php if(($generalcontent['office_hours']) && ($generalcontent['enable_footer_hours'])): ?>
            <div class="col-lg-6 col-sm-12 footform-col">
               <?php else:?>
                  <div class="col-lg-12 col-sm-12 footform-col fullfoot-formcol">
                     <?php endif;?>
                     <div class="footform-block" data-aos="fade-right" data-aos-duration="2000">
      <?php if(($generalcontent['landing_footer_form_title']) || ($generalcontent['landing_footer_form_sub_title'])):?> 
                        <div class="maintitle">
         <?php if($generalcontent['landing_footer_form_title']):?>
                           <h2><?php echo $generalcontent['landing_footer_form_title']; ?></h2>
                           <?php endif;?>
         <?php if($generalcontent['landing_footer_form_sub_title']):?>
                           <p><?php echo $generalcontent['landing_footer_form_sub_title']; ?></p>
                           <?php endif;?>
                        </div>
                        <?php endif;?>
                        <div class="footform">
                           <?php if(!empty($generalcontent['select_landing_footer_form'])):?>                   
                  <?php $shortcode = sprintf("[contact-form-7 id=%1s]",$generalcontent['select_landing_footer_form'] ); ?>
                  <?php  echo do_shortcode($shortcode);?>      
                  <?php endif;?>
                  <?php if(!empty($generalcontent['landing_footer_form'])):?>
                  <?php echo $generalcontent['landing_footer_form']; ?>
                  <?php endif; ?>
                        </div>
                     </div>
                  </div>
                  <?php endif;?>
         <?php if(($generalcontent['office_hours']) && ($generalcontent['enable_footer_hours'])): ?>
                  <div class="col-lg-6 col-sm-12 foothour-col">
                     <div class="foothour-block" data-aos="fade-left" data-aos-duration="2000">
               <?php if(($generalcontent['office_hours_title']) || ($generalcontent['office_hours_sub_title'])):?>
                        <div class="maintitle">
                           <?php if($generalcontent['office_hours_title']):?>
                           <h2><?php echo $generalcontent['office_hours_title']; ?></h2>
                           <?php endif;?>
                           <?php if($generalcontent['office_hours_sub_title']):?>
                           <p><?php echo $generalcontent['office_hours_sub_title']; ?></p>
                           <?php endif;?>
                        </div>
                        <?php endif;?>
                        <div class="foothours">
                           <ul class="foothourslist clearfix">
                  <?php foreach ($generalcontent['office_hours'] as $hours_val) :?>   
                              <li>
                                 <span class="hoursday"><?php echo $hours_val['day']; ?></span>
                                 <span class="hourstime"><?php echo $hours_val['opening_time']; ?><?php if($hours_val['closing_time']): ?> - <?php echo $hours_val['closing_time']; ?> <?php endif;?></span>
                              </li>
                              <?php endforeach;?>
                  <?php if($generalcontent['office_hours_note']):?>  
                              <li class="hoursnote"><?php echo $generalcontent['office_hours_note']; ?></li>
                              <?php endif;?>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <?php endif;?>
               </div>
            </div>
         </div>
      </div>
      <?php endif;?> 
      <?php if($generalcontent['google_map']):?>        
      <div class="footmap-block">
         <div class="footer-map" data-aos="zoom-in" data-aos-duration="3000">
            <?php echo $generalcontent['google_map'];?>
         </div>
      </div>
      <?php endif;?>
      <div class="footer-inner">
         <div class="footerinner-block" data-aos="zoom-in" data-aos-duration="3000">
            <div class="container">
               <div class="row footerinner-row">
                  <?php  
                     $eam=$generalcontent['enable_disable_landing_footer_about_us_menu'];
                     $esm=$generalcontent['enable_disable_landing_footer_services_menu'];
                     $efa=$generalcontent['enable_footer_address'];
                     $efp=$generalcontent['enable_footer_phone'];
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
                  <?php if(($generalcontent['enable_footer_address']) || ($generalcontent['enable_footer_phone'])):?>
                  <div class="<?php echo $locationclass; ?>">
                     <?php if($generalcontent['address_title']):?>
                     <h3 class="footcol-title"><?php echo $generalcontent['address_title']; ?></h3>
                     <?php endif;?>
                     <div class="footcontact-info">
                  <?php if(($generalcontent['address']) && ($generalcontent['enable_footer_address'])): ?>
                        <div class="footinfo-text foot-adderss">
                           <a href="<?php echo $generalcontent['address_link']; ?>" target="_blank"><i class="fas fa-map-marker-alt"></i><?php echo $generalcontent['address']; ?></a>
                        </div>
                        <?php endif;?>
                        <?php if(($email_id) && ($footer_pages_display_settings['enable_footer_email'])):?>
                        <div class="footinfo-text foot-mail">
                           <a href="mailto:<?php echo $email_id; ?>"><i class="fa fa-envelope"></i><?php echo $email_id; ?></a>
                        </div>
                        <?php endif;?>
                  <?php if(($generalcontent['phone_number']) && ($generalcontent['enable_footer_phone'])): ?>
                        <div class="footinfo-text foot-phone">
                           <a href="tel:<?php echo $generalcontent['phone_number']; ?>"><i class="fas fa-phone"></i><?php echo $generalcontent['phone_number']; ?></a>
                        </div>
                        <?php endif;?>
                  <?php if(($generalcontent['fax_number']) && ($generalcontent['enable_footer_fax'])): ?>
                        <div class="footinfo-text foot-fax">
                           <span><i class="fas fa-fax"></i><?php echo $generalcontent['fax_number']; ?></span>
                        </div>
                        <?php endif;?>
                     </div>
               <?php if(($generalcontent['enable_footer_social_icons']) && ($generalcontent['social_links'])): ?>
                     <div class="foot-social">
                        <ul class="socialmedia">
                     <?php foreach ($generalcontent['social_links'] as $soc_val):?>
                           <li><a href="<?php echo $soc_val['social_link_url'];?>" target="_blank" ><i class="<?php echo $soc_val['social_link_icon_class'];?>"></i></a></li>
                           <?php endforeach;?>
                        </ul>
                     </div>
                     <?php endif;?>
                  </div>
                  <?php endif;?>
            <?php if(($generalcontent['select_landing_footer_about_us_menu']) && ($generalcontent['enable_disable_landing_footer_about_us_menu'])):?>
                  <div class="<?php echo $aboutmenuclass; ?>">
               <?php if($generalcontent['landing_footer_about_us_menu_title']): ?>
                     <h3 class="footcol-title footmenu-toggle"><?php echo $generalcontent['landing_footer_about_us_menu_title']; ?></h3>
                     <?php endif;?>
                     <div class="footmenu">
                  <?php echo do_shortcode($generalcontent['select_landing_footer_about_us_menu']);?>
                     </div>
                  </div>
                  <?php endif;?>
            <?php if(($generalcontent['select_landing_footer_services_menu']) && ($generalcontent['enable_disable_landing_footer_services_menu'])):?>
                  <div class="<?php echo $servmenuclass; ?>">
               <?php if($generalcontent['landing_footer_services_menu_title']): ?>
                     <h3 class="footcol-title footmenu-toggle"><?php echo $generalcontent['landing_footer_services_menu_title']; ?></h3>
                     <?php endif;?>
                     <div class="footmenu footservice">
                  <?php echo do_shortcode($generalcontent['select_landing_footer_services_menu']);?>
                     </div>
                  </div>
                  <?php endif;?>
               </div>
            </div>
         </div>
      </div>
      
      <?php if($generalcontent['copyright']):?>
      <div class="footcopy">
         <div class="container">
            <p>&#169;<?php echo date('Y');
               echo '&nbsp;';
               echo $generalcontent['copyright']; ?></p>
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
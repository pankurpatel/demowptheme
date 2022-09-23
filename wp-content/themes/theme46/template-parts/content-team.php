<?php 
   /*
   Template for displaing content of single doctor in single-team.php file
   */
   ?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_field('team_details_page_background_color','option')):?>
<?php $backcolor = 'background-color:'.get_field('team_details_page_background_color','option').';';?>
<?php endif; ?>
<?php if(get_field('team_details_page_background_image','option')):?>
<?php $backimg = 'background-image:url('.get_field('team_details_page_background_image','option')['url'].');';?>
<?php endif; ?>
<?php if((get_field('team_details_page_background_color','option')) || (get_field('team_details_page_background_image','option'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<div class="doctordetail-content" <?php echo $style;?>>
<section class="doctordetail-main">
   <div class="container">
      <?php if((get_field('page_title')) || (get_field('page_sub_description'))):?>
      <div class="inner-title">
         <?php if(get_field('page_title')):?>
         <h1 data-aos="fade-down" data-aos-duration="2000"><?php echo get_field('page_title'); ?></h1>
         <?php endif;?>
         <?php if(get_field('page_sub_description')):?>
         <p data-aos="fade-up" data-aos-duration="2000"><?php echo get_field('page_sub_description'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <div class="doctordetail-desc clearfix">
         <?php if(get_the_post_thumbnail_url()):?>
         <div class="doctordetail-thumb" data-aos="fade-right" data-aos-duration="2000">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_field('doctor_name'); ?>" width="503" height="430" />
         </div>
         <?php endif;?>
         <?php if((get_field('doctor_name')) || (get_field('doctor_designation'))):?>
         <div class="doctordetail-info" data-aos="fade-left" data-aos-duration="2000">
            <?php if(get_field('doctor_name')):?>
            <h3><?php echo get_field('doctor_name'); ?></h3>
            <?php endif;?>
            <?php if(get_field('doctor_designation')):?>
            <span><?php echo get_field('doctor_designation');?></span>
            <?php endif;?>
         </div>
         <?php endif;?>
         <?php if(get_field('full_description')):?>
         <div class="doctordetail-fulldesc" data-aos="fade-left" data-aos-duration="2000">
            <?php echo get_field('full_description'); ?>    
         </div>
         <?php endif;?>
      </div>
   </div>
</section>
<?php if(get_field('enable_other_team','option')):?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_field('other_team_background_color','option')):?>
<?php $backcolor = 'background-color:'.get_field('other_team_background_color','option').';';?>
<?php endif; ?>
<?php if(get_field('other_team_background_image','option')):?>
<?php $backimg = 'background-image:url('.get_field('other_team_background_image','option')['url'].');';?>
<?php endif; ?>
<?php if((get_field('other_team_background_color','option')) || (get_field('other_team_background_image','option'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<section class="otherdoctor-section" <?php echo $style;?>>
   <div class="container">
      <?php if((get_field('other_team_title','option')) || (get_field('other_team_sub_title','option'))):?>
      <div class="maintitle">
         <?php if(get_field('other_team_title','option')):?>
         <h1 data-aos="fade-down" data-aos-duration="2000"><?php echo get_field('other_team_title','option'); ?></h1>
         <?php endif;?>
         <?php if(get_field('other_team_sub_title','option')):?>
         <p data-aos="fade-up" data-aos-duration="2000"><?php echo get_field('other_team_sub_title','option'); ?></p>
         <?php endif;?>
      </div>
      <?php endif;?>
      <div class="row doctor-list othrdoctor-slider owl-carousel">
         <?php 
            $select_other_team=get_field('select_other_team','option'); 
            $other_team_read_more_button_text=get_field('other_team_read_more_button_text','option');
            $currentid=get_the_ID();
            ?>
         <?php if($select_other_team):?>
         <?php foreach ($select_other_team as $team_val) :?>
         <?php if($currentid != $team_val->ID):?>
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
               <?php if(($other_team_read_more_button_text) && (get_field('enable_details',$team_val->ID))):?>
               <div class="drlistbox-btn">
                  <a class="gradient-btn" href="<?php echo get_the_permalink($team_val->ID); ?>"><?php echo $other_team_read_more_button_text; ?></a>
               </div>
               <?php endif;?>
            </div>
         </div>
      <?php endif;?>
         <?php endforeach;?>
         <?php endif;?> 
      </div>
</section>
<?php endif;?>
</div>
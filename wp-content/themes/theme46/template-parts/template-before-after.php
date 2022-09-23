<?php 
  /**
   * Template Name: Before After
   *
   * @package Theme46
   */
  get_header();
  $before_after_option=get_field('before_after_option');
  ?>
<div class="beforeafter-content">
  <?php if((get_field('enable_banner_image')) && (get_field('banner_image'))): ?>
   <section class="inner-banner" data-aos="fade-down" data-aos-duration="2000">
      <div class="innerbanner-img" style="background-image: url(<?php echo get_field('banner_image')['sizes']['inner-page-banner']; ?>);">
         <img src="<?php echo get_field('banner_image')['sizes']['inner-page-banner']; ?>" alt="<?php echo get_field('banner_title'); ?>" width="1920" height="600" />
      </div>
   </section>
   <?php endif;?>
          <section class="bfraftrmain-section">
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

            <?php if($before_after_option['enable_before_after_option_1']): ?>
      <?php 
        $before_after=$before_after_option['before_after']; 
        ?>
      <?php if($before_after): ?>
      <div class="bfraftr-optionlist bfraftr-option1">
        <div class="row bfraftr-imglist">
          <?php foreach ($before_after as $ba_val) :?>
          <?php
            $before_image=$ba_val['before_image'];
            $after_image=$ba_val['after_image'];
            $before_title=$before_image['title'];
            $before_small_desc=$before_image['small_description'];
            $after_title=$after_image['title'];
            $after_small_desc=$after_image['small_description'];
            
            ?>
          <div class="col-lg-6 col-12 beforafter-col item">
            <div class="row">
              <?php if($before_image):?>
              <div class="col-6 beforeimg-col">
                <?php if($before_image['image']):?>
                <div class="beforafter-img">
                  <img src="<?php echo $before_image['image']['sizes']['bfaf-thumb'] ?>" alt="<?php echo $before_title; ?>" width="277" height="200" />
                </div>
                <?php endif;?>
                <?php if($before_title):?>
                <span class="bfraftr-caption"><?php echo $before_title; ?></span>
                <?php endif;?>
              </div>
              <?php endif;?>
              <?php if($after_image):?>
              <div class="col-6 afterimg-col">
                <?php if($after_image['image']):?>
                <div class="beforafter-img">
                  <img src="<?php echo $after_image['image']['sizes']['bfaf-thumb'] ?>" alt="<?php echo $after_title; ?>" width="277" height="200"  />
                </div>
                <?php endif;?>
                <?php if($after_title):?>
                <span class="bfraftr-caption"><?php echo $after_title; ?></span>
                <?php endif;?>
              </div>
              <?php endif;?>
            </div>
          </div>
          <?php endforeach;?>
        </div>
      </div>
      <?php endif;?>
      <?php endif;?>

         <?php if($before_after_option['enable_before_after_option_2']):?>
                  
              <?php $before_after_single_images=$before_after_option['before_after_single_images'];?>

             <?php if($before_after_single_images):?>

              <div class="bfraftr-optionlist bfraftr-option1">
                <div class="row bfraftr-imglist">
                  <?php foreach ($before_after_single_images as $bf_val):?>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 item" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="bfraftr-box">
                      <img src="<?php echo $bf_val['before_after_single_image']['sizes']['before-after-thumb']; ?>" alt="<?php echo  $bf_val['bf_val']['alt']; ?>" width="636" height="295" />
                      <div class="bfraftr-caption clearfix">
                        <?php if($bf_val['before_title']):?>
                        <span class="caption-left"><?php echo $bf_val['before_title']; ?></span>
                      <?php endif;?>
                      <?php if($bf_val['after_title']):?>
                        <span class="caption-right"><?php echo $bf_val['after_title']; ?></span>
                      <?php endif;?>
                      </div>
                    </div>
                  </div>
                <?php endforeach;?>

                </div>
              </div>
            <?php endif;?>
        <?php endif;?>
        <?php if($before_after_option['enable_before_after_option_3']): ?>
      <div class="beforeafteropt bfraftr-option3">
        <?php if($before_after_option['before_after_listing_title_third']): ?>
        <div class="innertitle">
          <h2><?php echo $before_after_option['before_after_listing_title_third']; ?></h2>
        </div>
        <?php endif; ?>
        <?php $before_after_slider=$before_after_option['before_after_slider']; ?>
        <?php if($before_after_slider):?>
        <div class="beforeafter-slide">
          <div class="before-after-slider before-after-list owl-carousel">
            <?php  foreach ($before_after_slider as $ba_slider):?>
            <div class="item beforeafter-item">
              <?php $ba_sliderimg =$ba_slider['before_after_slider_image']; ?>
              <?php if($ba_sliderimg):?>
              <img src="<?php echo $ba_sliderimg['sizes']['before-after-thumb']; ?>" alt="<?php echo $ba_sliderimg['alt']; ?>" width="636" height="295" />
              <?php endif;?>
              <?php if($ba_slider['before_option3_title']): ?>
              <span class="bfraftr-caption2 caption-left"><?php echo $ba_slider['before_option3_title']; ?></span>
              <?php endif; ?>
              <?php if($ba_slider['after_option3_title']): ?>
              <span class="bfraftr-caption2 caption-right"><?php echo $ba_slider['after_option3_title']; ?></span>
              <?php endif; ?>
            </div>
            <?php endforeach;?>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <?php endif;?>
            </div>
          </section>
        </div>
<?php get_footer(); ?>
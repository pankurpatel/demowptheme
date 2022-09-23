<?php 
  /**
   * Template Name: Testimonials
   *
   * @package Theme46
   */
  get_header();
  
  $testimonials_option=get_field('testimonials_option');
  ?>
<div class="reviewmain-content">
  <?php if((get_field('enable_banner_image')) && (get_field('banner_image'))): ?>
   <section class="inner-banner" data-aos="fade-down" data-aos-duration="2000">
      <div class="innerbanner-img" style="background-image: url(<?php echo get_field('banner_image')['sizes']['inner-page-banner']; ?>);">
         <img src="<?php echo get_field('banner_image')['sizes']['inner-page-banner']; ?>" alt="<?php echo get_field('banner_title'); ?>" width="1920" height="600" />
      </div>
   </section>
   <?php endif;?>
             <section class="reviewmain-section">
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
             <?php if($testimonials_option['testimonials_option_1_enable']): ?>
              <?php $testimonials_list=$testimonials_option['testimonials_list'];?>
              <?php if($testimonials_list):?>
              <div class="review-list reviewslider owl-carousel">
               <?php foreach ($testimonials_list as $test_val) :?>
                <div class="item" data-aos="zoom-in" data-aos-duration="2000">
                  <div class="reviewbox">
                    <div class="reviewbox-inner">
                      <?php if($test_val['image']):?>
                      <div class="reviewbox-thumbcol">
                        <div class="reviewbox-thumb">
                          <img src="<?php echo $test_val['image']['sizes']['home-service-thumb']; ?>" alt="<?php echo $test_val['auther_name']; ?>" width="325" height="278" />
                        </div>
                      </div>
                    <?php endif;?>
                      <div class="reviewbox-desc">
                        <?php if($test_val['auther_name']):?>
                        <h3><?php echo $test_val['auther_name']; ?></h3>
                      <?php endif;?>
                      <?php if($test_val['testimonial_content']):?>
                        <p><?php echo $test_val['testimonial_content']; ?></p>
                      <?php endif;?>
                      <?php if($test_val['testimonial_star']):?>
                        <div class="review-rating">
                          <?php foreach ($test_val['testimonial_star'] as $star_val):?>
                          <i class="fas fa-star"></i>
                          <?php endforeach;?>
                        </div>
                      <?php endif;?>
                      </div>
                    </div>
                  </div>
                </div>
                  <?php endforeach;?>
              </div>
            <?php endif;?>
            <?php endif;?>
            
            </div>
          </section>
          <!-- End: Main Content -->
        </div>
<?php get_footer(); ?>
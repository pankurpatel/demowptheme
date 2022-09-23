<?php 
   /*
   Template for displaing content of single post in single.php file
   */
   ?>
<?php $style=$backcolor=$backimg='';?>
<?php if(get_field('blog_details_page_background_color','option')):?>
<?php $backcolor = 'background-color:'.get_field('blog_details_page_background_color','option').';';?>
<?php endif; ?>
<?php if(get_field('blog_details_page_background_image','option')):?>
<?php $backimg = 'background-image:url('.get_field('blog_details_page_background_image','option')['url'].');';?>
<?php endif; ?>
<?php if((get_field('blog_details_page_background_color','option')) || (get_field('blog_details_page_background_image','option'))): ?>
<?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
<?php endif;?>
<div class="blogdetail-content" <?php echo $style;?>>
   <?php if((get_field('use_banner_image')) && (get_the_post_thumbnail_url())): ?>
   <section class="inner-banner" data-aos="fade-down" data-aos-duration="2000">
      <div class="innerbanner-img" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'inner-page-banner'); ?>);">
         <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'inner-page-banner'); ?>" alt="<?php echo get_field('title'); ?>" width="1920" height="600" />
      </div>
   </section>
   <?php endif;?>
   <section class="blogmain-content">
      <div class="container">
         <?php if(get_field('title')):?>
         <div class="inner-title" data-aos="fade-left" data-aos-duration="2000">
            <h1><?php echo get_field('title'); ?></h1>
         </div>
         <?php endif;?>
         <div class="blogmain-desc" data-aos="fade-up" data-aos-duration="2000">
            <?php the_content();?>
         </div>
         <div class="blogdtl-pagination" data-aos="fade-up" data-aos-duration="2000">
            <div class="blogdtl-pagnav">
               <?php
                  $prev_post = get_previous_post();
                  if (!empty( $prev_post )): ?>
               <a href="<?php echo $previous_post_url = get_permalink( get_adjacent_post(false,'',true)->ID ); ?>" class="border-btn">Previous</a>
               <?php endif; ?>
               <a href="<?php echo site_url('/blog'); ?>" class="blog-backbtn">Back To Blog</a>
               <?php
                  $next_post = get_next_post();
                  if (!empty( $next_post )): ?>
               <a href="<?php echo $next_post_url = get_permalink( get_adjacent_post(false,'',false)->ID ); ?>" class="gradient-btn">Next</a>
               <?php endif; ?> 
            </div>
         </div>
      </div>
   </section>
</div>
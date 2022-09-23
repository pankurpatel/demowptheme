<?php
/**
* Posts locator "gray" search results template file.
*
* This file outputs the search results.
*
* You can modify this file to apply custom changes. However, it is not recomended
* to make the changes directly in this file,
* because your changes will be overwritten with the next update of the plugin.
*
* Instead you can copy-paste this template ( the "gray" folder contains this file
* and the "css" folder ) into the theme's or child theme's folder of your site,
* and apply your changes from there.
*
* The custom template folder will need to be placed under:
* your-theme's-or-child-theme's-folder/geo-my-wp/posts-locator/search-results/
*
* Once the template folder is in the theme's folder, you will be able to select
* it in the form editor. It will show in the "Search results" dropdown menu labed with "Custom: ".
*
* @param $gmw  ( array ) the form being used
*
* @param $gmw_form ( object ) the form object
*
* @param $post ( object ) post object in the loop
*
* @package geo-my-wp
*/
?>
<div class="gmw-results-wrapper gray gmw-pt-gray-results-wrapper <?php echo esc_attr( $gmw['prefix'] ); ?>" data-id="<?php echo absint( $gmw['ID'] ); ?>" data-prefix="<?php echo esc_attr( $gmw['prefix'] ); ?>">
    <?php if ( $gmw_form->has_locations() ) : ?>
    <div class="gmw-results">
        <?php do_action( 'gmw_search_results_start', $gmw ); ?>
        <div class="gmw-results-message">
            <span><?php gmw_results_message( $gmw ); ?></span>
            <?php do_action( 'gmw_search_results_after_results_message', $gmw ); ?>
        </div>
        <?php do_action( 'gmw_search_results_before_top_pagination', $gmw ); ?>
        <div class="pagination-per-page-wrapper top">
            <?php gmw_per_page( $gmw ); ?>
            <?php gmw_pagination( $gmw ); ?>
        </div>
        <?php gmw_results_map( $gmw ); ?>
        <?php do_action( 'gmw_search_results_before_loop', $gmw ); ?>
            <div class="row findloclist-row">
            <?php
            while ( $gmw_query->have_posts() ) :
                $gmw_query->the_post();
            ?>
            <?php global $post; ?>
            
            <?php
            $location_link = get_the_permalink( $post->ID );
            $location_image = get_the_post_thumbnail_url($post->ID);
            $location_title = get_field('title',$post->ID);
            $location_phone = get_field('phone_number',$post->ID);
            $location_address = get_field('address',$post->ID);
            $location_address_url = get_field('address_url',$post->ID);
            
            ?>
           <div class="col-lg-4 col-sm-6 item">
                  <div class="findlocationbox">
                     <a href="<?php echo $location_link; ?>" class="findlocation-img">
                     <img src="<?php echo $location_image; ?>" alt="<?php echo $location_title; ?>" width="224" height="192" />
                     </a>
                     <div class="findlocbox-info">
                        <h3><a href="<?php echo $location_link; ?>"><?php echo $location_title; ?></a></h3>
                        <div class="findloc-adress">
                           <a href="<?php echo $location_address_url; ?>" target="_blank"><?php echo $location_address; ?></a>
                        </div>
                        <div class="findloc-call">
                           <a href="tel:<?php echo $location_phone; ?>"><?php echo $location_phone; ?></a>
                        </div>
                     </div>
                     <div class="findloc-btn">
                        <a  class="border-btn" href="<?php echo $location_link; ?>">Learn More</a>
                     </div>
                  </div>
               </div>
            <?php endwhile; ?>
        </div>
        <?php do_action( 'gmw_search_results_after_loop', $gmw ); ?>
        <div class="pagination-per-page-wrapper bottom">
            <?php gmw_per_page( $gmw ); ?>
            <?php gmw_pagination( $gmw ); ?>
        </div>
        <?php do_action( 'gmw_search_results_end', $gmw ); ?>
    </div>
    <?php else : ?>
    <div class="gmw-no-results">
        <?php do_action( 'gmw_no_results_start', $gmw ); ?>
        <?php gmw_no_results_message( $gmw ); ?>
        <?php do_action( 'gmw_no_results_end', $gmw ); ?>
    </div>
    <?php endif; ?>
</div>
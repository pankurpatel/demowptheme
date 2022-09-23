<?php
   /**
   
    * Template Name: Find location
   
    *
   
    * @package Theme46
   
    */
   
   get_header();
   ?>
<?php 
   $simple_location = get_field('simple_location');
   $multi_location_map_shortcode = get_field('multi_location_map_shortcode');
   $multi_location_shortcode = get_field('multi_location_shortcode');
   ?>
<?php if(get_field('simple_location_enable')): ?>
<div class="findlocation-section">
   <?php if(get_field('simple_location_map')):?>
   <div class="findlocation-map">
      <?php echo get_field('simple_location_map'); ?>
   </div>
   <?php endif;?>
   <div class="findloclist-section">
      <div class="findloclist-inner">
         <div class="container">
            <?php if(get_field('simple_location_title')):?> 
            <div class="inner-title">
               <h1><?php echo get_field('simple_location_title'); ?></h1>
            </div>
            <?php endif; ?>
            <div class="row findloclist-row">
               <?php if( $simple_location ): ?>
               <?php foreach( $simple_location as $simple_locations ):?>
               <?php
                  $location_link = get_the_permalink( $simple_locations->ID );
                  $location_image = get_the_post_thumbnail_url($simple_locations->ID);
                  $location_title = get_field('title',$simple_locations->ID); 
                  $location_phone = get_field('phone_number',$simple_locations->ID); 
                  $location_address = get_field('address',$simple_locations->ID); 
                  $location_address_url = get_field('address_url',$simple_locations->ID); 
                  
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
               <?php endforeach; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>
<?php if(get_field('multi_location_enable')): ?>
<div class="findlocation-section">
   <?php if($multi_location_map_shortcode):?>
   <div class="findlocation-map">
      <?php echo do_shortcode($multi_location_map_shortcode); ?>
   </div>
   <?php endif;?>
   <div class="findloclist-section">
      <div class="findloclist-inner">
         <div class="container">
            <?php if(get_field('multi_location_title')):?> 
            <div class="inner-title">
               <h1><?php echo get_field('multi_location_title'); ?></h1>
            </div>
            <?php endif; ?>
            <?php echo do_shortcode($multi_location_shortcode); ?>
         </div>
      </div>
   </div>
</div>
<!-- #primary -->
<script type="text/javascript">
   $(document).ready(function() {
   
     var getUrlParameter = function getUrlParameter(sParam) {
       var sPageURL = window.location.search.substring(1),
       sURLVariables = sPageURL.split('&'),
       sParameterName,
       i;
   
       for (i = 0; i < sURLVariables.length; i++) {
         sParameterName = sURLVariables[i].split('=');
   
         if (sParameterName[0] === sParam) {
           return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
         }
       }
     };
   
     setTimeout(function() {
       var locationName = getUrlParameter('locationName');
   
       if (locationName == undefined) {
         var myVar = setInterval(function() {
           navigator.permissions.query({
             name: 'geolocation'
           }).then(function(result) {
                     if (result.state == 'granted') { //prompt, granted, denied
                       $('.sl_use_loc').click();
                       setTimeout(function() {
                         searchLocations(1);
                         clearInterval(myVar);
                       }, 500);
                     }
                   });
         }, 1000);
       } else {
         $('#addressInput_1').val(locationName);
         searchLocations(1);
       }
   
     }, 2000);
   
   
     //$(".findlocation-data > a[name=map1]"). removeAttr("name");
   
   });
   
</script>
<?php endif; ?>
<?php get_footer(); ?>
<?php
    /**
     * The template for displaying  single landing content
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package Theme46
     */
?>
<?php
$generalcontent=get_field('general_content');
$default_header=$generalcontent['default_homepage_header'];
$landing_custom_header=$generalcontent['landing_custom_header'];
$landing_custom_header_content=$generalcontent['landing_custom_header_editor'];
$landing_header=$generalcontent['landing_header'];
if(!empty($default_header))
{
get_header('location-landing-five');
}
else if($landing_custom_header && $landing_custom_header_content)
{
echo $landing_custom_header_content;
}
else if($landing_header)
{
include ('template-parts/landing/landing-header.php'); 
}
?>
        <?php
        while ( have_posts()) :
            the_post();
            get_template_part( 'template-parts/content', 'landing' );
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile; // End of the loop.
        ?>
<?php 
if($generalcontent['default_homepage_footer'])
{
include ('footer.php');
}
 else if($generalcontent['landing_custom_footer'] && $generalcontent['landing_custom_footer_editor'])
 {
echo $generalcontent['landing_custom_footer_editor'];
}
 else if($generalcontent['landing_footer'])
 {
include ('template-parts/landing/landing-footer.php'); 
}
?>
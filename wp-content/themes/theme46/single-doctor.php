<?php
    /**
     * The template for displaying  single doctor content
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-doctor
     *
     * @package Theme46
     */
    get_header();
?>
        <?php
        while ( have_posts()) :
            the_post();
            get_template_part( 'template-parts/content', 'doctor' );
        endwhile; // End of the loop.
        ?>
<?php get_footer(); ?>
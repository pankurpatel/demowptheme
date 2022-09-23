<?php
    /**
     * The template for displaying  single location content
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package Theme46
     */
    get_header();
?>
        <?php
        while ( have_posts()) :
            the_post();
            get_template_part( 'template-parts/content', 'location' );
        endwhile; // End of the loop.
        ?>
<?php get_footer(); ?>
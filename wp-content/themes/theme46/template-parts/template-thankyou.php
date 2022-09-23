<?php 

/*

 * Template Name: Thank you

 *

 * @package Theme46

 */

get_header();

global $primary_color, $secondary_color;

?>
<div class="thankyoupage-section">
	<div class="container">
		<div class="thankyoublock">
			<?php if(get_field('custom_title')): ?>
			<div class="main-title">
				<h1><?php the_field('custom_title'); ?></h1>
				<?php if(get_field('custom_description')): ?>
					<div class="hmsubtitle"><?php the_field('custom_description'); ?></div>
				<?php endif; ?>	
			</div>
			<?php else: ?>
			<div class="main-title">
				<h1><?php the_title();?></h1>
				<?php if(get_field('custom_description')): ?>
					<div class="hmsubtitle"><?php the_field('custom_description'); ?></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php
			$post_object = get_post( $post->ID );
			echo apply_filters('the_content', $post_object->post_content);
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
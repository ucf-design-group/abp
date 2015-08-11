<?php /* Template Name: Calendar */

get_header(); ?>

	<div class="main">
<?php
			while (have_posts()) {
				the_post();
				get_template_part( 'content' );
			} 
?>
	</div>


<?php get_footer(); ?>
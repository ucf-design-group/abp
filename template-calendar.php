<?php /* Template Name: Calendar */

get_header(); ?>

	<h1 class="page-title">Calendar</h1>

	<div class="main">
<?php
			while (have_posts()) {
				the_post();
				get_template_part( 'content' );
			} 
?>
	</div>


<?php get_footer(); ?>
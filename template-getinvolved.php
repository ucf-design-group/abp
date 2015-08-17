<?php /* Template Name: Get Involved */

get_header(); ?>

	<div class="content-area">

		<h1 class="page-title">Participant and Faculty Advisor Selection</h1>

		<div class="main">
<?php
			while (have_posts()) {
				the_post();
				get_template_part ( 'content' );
			}
?>
		</div>
		
	</div>

<?php get_footer(); ?>
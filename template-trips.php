<?php /* Template Name: Trips */

get_header(); ?>

	<div class="content-area">

		<h1>TRIPS</h1>

		<ul class="categories">
			<a href="#"><li>Fall Trips</li></a>
			<a href="#"><li>Winter Trips</li></a>
			<a href="#"><li>MLK Trips</li></a>
			<a href="#"><li>International Trips</li></a>
			<a href="#"><li>Spring Trips</li></a>
		</ul>

		<div class="main">
<?php
			while (have_posts()) {
				the_post();
				get_template_part( 'content' );
			}
?>
		</div>

	</div>

<?php get_footer(); ?>
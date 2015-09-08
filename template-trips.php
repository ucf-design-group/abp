<?php /* Template Name: Trips */

get_header(); ?>

	<div class="content-area">

		<h1 class="page-title">Trips</h1>

		<ul class="categories">
			<a href="#fall"><li>Fall Trips</li></a>
			<a href="#winter"><li>Winter Trips</li></a>
			<a href="#mlk"><li>MLK Trips</li></a>
			<a href="#international"><li>International Trips</li></a>
			<a href="#spring"><li>Spring Trips</li></a>
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

	<script>

	// Smooth scroll to id... but the smooth part isn't working. Remember! 

	$(document).ready(function(){

		$('a[href^="#"]').bind('click.smoothscroll', function(e) {
			e.preventDefault();
			var target = this.hash;
				$target = $(target);
			$('html', 'body').stop().animate({
				scrollTop : $target.offset().top
			}, 3000, function () {
				window.location.hash = target;
			});
		});

	});

	</script>

<?php get_footer(); ?>
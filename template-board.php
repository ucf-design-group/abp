<?php /* Template Name: Board */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_posts(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop ?>

<?php
			$leaderQuery = new WP_QUERY(array('post_type' => 'leadership', 'posts_per_page' => -1, 'meta_key' => 'leader-form-order', 'orderby' => 'meta_value', 'order' => 'ASC'));

			while ($leaderQuery->have_posts()) {

				$leaderQuery->the_post();
				$title = get_the_title();
				$position = get_post_meta($post->ID, 'leader-form-position', true);
				$content = get_the_content();
				$image = get_the_post_thumbnail($post->ID, 'small');
				$slug = $post->post_name;
?>

			<article id="<?php echo $slug; ?>" class="leader">
				<div class="info">
					<h1><?php echo $title; ?></h1>
				</div>
			</article>
<?php
			}
?>
		</div>
	</div>
<?php get_footer(); ?>
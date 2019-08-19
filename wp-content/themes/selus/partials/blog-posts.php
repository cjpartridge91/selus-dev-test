<div class="row blog-posts-container">
	<?php while ( have_posts() ) : the_post();
		$date = get_the_date('M d');
		$title = get_the_title();
		$excerpt = get_the_excerpt();
		$link = get_the_permalink();
		$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog');
		$alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
	?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-post-wrapper">
		<div class="blog-post-container">
			<div class="img-container" style="background-image: url(<?php echo $image['0']; ?>);"></div>
			<div class="date-container">
				<?php echo $date; ?>
			</div>
			<h3>
				<?php echo $title; ?>
			</h3>
			<p>
				<?php echo $excerpt; ?>
			</p>
			<a href="<?php echo $link; ?>" class="btn">
				Read More
			</a>
		</div>
	</div>
	<?php endwhile; ?>
	<?php get_template_part('partials/pagination'); ?>
</div>
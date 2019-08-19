<?php get_header(); ?>
	 <?php if ( have_posts() ) : ?>
		<div class="row page-container">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-12 main-content">
			 	<div class="container">
			 		<div class="row">
						<div class="col-xl-8 col-lg-8 col-md-12 col-12 secondary">
							<div class="content-container">
								<?php
									// vars
									$title = get_the_title();
									$content = get_the_content();
									$testimonial = get_field('testimonial');
									$image = get_the_post_thumbnail_url(get_the_ID(),'large');
									$alt = esc_html ( get_the_post_thumbnail_caption() );
								?>
								<h1>
									<?php echo $title; ?>
								</h1>
								<?php if($image): ?>
									<img class="featured-img" style="width: 100%;" src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" />
								<?php endif; ?>

								<?php echo wpautop($content); ?>
							 </div>
						</div>
						<?php get_sidebar(); ?>
					</div>
			 	</div>
			</div>
		 	<?php endwhile;?>
	 	</div>
	<?php endif; ?>
<?php get_footer(); ?>
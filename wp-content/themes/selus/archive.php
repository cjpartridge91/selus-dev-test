<?php get_header(); ?>
	<div class="row page-container">
		<?php if (have_posts()): ?>
			<div class="col-12 main-content">
			 	<div class="container">
			 		<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12 col-12 secondary">
							<div class="content-container">
								
								<?php get_template_part('partials/blog-posts'); ?>
							</div>
						</div>
						<?php get_sidebar(); ?>
				 	</div>
				</div>
			</div>
		<?php endif; ?>
 	</div>
<?php get_footer(); ?>
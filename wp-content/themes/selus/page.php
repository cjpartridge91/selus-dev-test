<?php get_header(); ?>
	 <?php if ( have_posts() ) : ?>
		<div class="row page-container">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-12 main-content">
			 	<div class="container">
			 		<div class="row">
						<div class="col-xl-8 col-lg-8 col-md-12 col-12 secondary">
							<div class="content-container">
								<h1>
									<?php echo the_title(); ?>
								</h1>
							 	<?php echo the_content(); ?>
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
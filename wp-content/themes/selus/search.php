<?php get_header(); ?>
	<div class="row page-content">
		<?php get_template_part('partials/banner'); ?>
		<div class="col-xs-12 main-content">
			<div class="container">
				<?php if ( have_posts() ) : ?>
					<div class="col-md-12 col-sm-12 col-xs-12 secondary">
						<?php get_template_part('partials/blog', 'post'); ?>
					</div>
				<?php else : ?>
					<div class="col-md-12 col-sm-12 col-xs-12 secondary search-results-container">
						<h2 class="entry-title">Nothing Found</h2>
						<p>Sorry, nothing matched your search. Please try again.</p>
						<?php get_template_part('partials/search', 'form'); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
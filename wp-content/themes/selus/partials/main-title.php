<?php
	// vars
	$title = get_the_title();
?>

<?php if(!is_blog() && !is_404() && !is_search()): ?>
	<h1>
		<?php echo $title; ?>
	</h1>
<?php endif; ?>
<?php if(is_blog()): ?>
	<?php if (have_posts()) : $post = $posts[0]; ?>
		<?php if(is_category()): ?>
			<h1>
				<?php single_cat_title(); ?>
			</h1>
		<?php elseif(is_tag()): ?>
			<h1>
				Posts Tagged "<?php single_tag_title(); ?>"
			</h1>
		<?php elseif(is_day()): ?>
			<h1>
				Archive for <?php the_time('F jS, Y'); ?>
			</h1>
		<?php elseif(is_month()): ?>
			<h1>
				Archive for <?php the_time('F, Y'); ?>
			</h1>
		<?php elseif(is_year()): ?>
			<h1>
				Archive for <?php the_time('Y'); ?>
			</h1>
		<?php elseif(is_author()): ?>
			<h1>
				Author Archive
			</h1>
		<?php elseif(isset($_GET['paged']) and !empty($_GET['paged'])): ?>
			<h1>
				Blog Archives
			</h1>
		<?php elseif(is_home() || is_singular('post')): ?>
			<h1>
				Blog
			</h1>
		<?php endif; ?>
	<?php else : ?>
		<h1>
			Nothing found
		</h1>
	<?php endif; ?>
<?php endif; ?>
<?php if(is_404()): ?>
	<h1>
		404
	</h1>
<?php endif; ?>
<?php if(is_search()): ?>
	<h1>
		<?php printf( __( 'Search Results for: %s', '' ), get_search_query() ); ?>
	</h1>
<?php endif; ?>
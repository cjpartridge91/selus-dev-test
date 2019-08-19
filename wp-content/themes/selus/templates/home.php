<?php
/*
 * Template Name: Home
*/
?>

<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row home-container">
			<?php get_template_part('templates/home/main', 'gallery'); ?>
			<?php get_template_part('templates/home/intro', 'section'); ?>
		</div>
 	<?php endwhile; endif; ?>
<?php get_footer(); ?>
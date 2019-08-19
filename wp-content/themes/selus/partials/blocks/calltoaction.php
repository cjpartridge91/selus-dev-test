<?php
	/* Call to Action Block Type */

	$ctaID = 'call-to-action-' . $block['id'];
	if( !empty($block['anchor']) ) {
	    $ctaID = $block['anchor'];
	}
	$ctaClass = 'call-to-action';
	if( !empty($block['className']) ) {
	    $ctaClass .= ' ' . $block['className'];
	}

	$ctaText = get_field('cta_text') ?: 'Your call to action message here...';
	$ctaTitle = get_field('cta_title') ?: 'Your call to action title here...';
?>

<div id="<?php echo esc_attr($ctaID); ?>" class="<?php echo esc_attr($ctaClass); ?>">
	<h2><?php echo $ctaTitle; ?></h2>
	<?php echo wpautop($ctaText); ?>
</div>
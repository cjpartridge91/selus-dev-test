<?php
	$mainBG = get_field('main_background_image');
	$introContent = get_field('intro_text');
?>

<div class="col-12 intro-section-container" style="background-image: url(<?php echo $mainBG['url']; ?>);">
	<div class="container">
		<div class="row intro-content-wrapper">
			<div class="col-12 intro-content-container">
				<?php echo $introContent; ?>
			</div>
		</div>
	</div>
</div>
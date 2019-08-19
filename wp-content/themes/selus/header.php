<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php wp_title( '|', true, 'right' ) ?></title>

		<?php get_template_part('partials/favicons'); ?>

		<?php wp_head(); ?>
  	</head>

 	<body <?php body_class(); ?>>
	<div class="container-fluid">
	  	<header class="row">
	  		<?php
				// vars
				$logo = get_field('company_logo', 'options');
			?>

			<!--Navbar-->
			<div class="col-12 header-nav-container">
				<div class="container">
					<nav class="navbar navbar-dark bg-dark">
						<a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>" class="img-fluid" /></a>

						<button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="mainMenu">
							<?php
								wp_nav_menu( array(
									'theme_location'    => 'primary',
									'container_class'   => 'menu-container',
									'menu_class'        => 'navbar-nav mr-auto',
								) );
							?>
						</div>
					</nav>
				</div>
			</div>
			
	  	</header>






<?php

// Enqueue Styles + Scripts
function enqueue_styles_scripts(){
	// Styles
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('smartmenus-css', get_bloginfo('template_url') . '/assets/css/sm-core-css.css');
	wp_enqueue_style('smartmenus-css-clean', get_bloginfo('template_url') . '/assets/css/sm-clean.css');
	
	wp_enqueue_style('main-css', get_bloginfo('template_url') . '/style.css');

	// Scripts
	wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js', array(), '', true);
	//wp_enqueue_script('slim-js', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '', true);
	//wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '', true);
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '', true);
	wp_enqueue_script('smartmenus-js', get_template_directory_uri() . '/assets/js/jquery.smartmenus.js', array('jquery'), '', true);

	wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_styles_scripts');


// Register Navigation
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'nysfops' ),
) );


// Theme Options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


// ACF Custom Block Types
function register_acf_block_types() {

    /* register a custom block.
    acf_register_block_type(array(
        'name'              => 'call-to-action',
        'title'             => __('Call to Action'),
        'description'       => __('A block for highlighting important info.'),
        'render_template'   => 'partials/blocks/calltoaction.php',
        'category'          => 'formatting',
        'keywords'          => array( 'important', 'cta' ),
        'post_types' 		=> array('post', 'page'),
    )); */
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}






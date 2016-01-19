<?php
/**
 * Theme Functions &
 * Functionality
 *
 */


/* =========================================
		ACTION HOOKS & FILTERS
   ========================================= */

/**--- Actions ---**/

add_action( 'after_setup_theme',  'theme_setup' );

add_action( 'wp_enqueue_scripts', 'theme_styles' );

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**--- Filters ---**/



/* =========================================
		HOOKED Functions
   ========================================= */

/**--- Actions ---**/


/**
 * Setup the theme
 *
 * @since 1.0
 */
function theme_setup() {

	// Let wp know we want to use html5 for content
	add_theme_support( 'html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption'
	) );


	// Let wp know we want to use post thumbnails
	/*
	add_theme_support( 'post-thumbnails' );
	*/


	// Register navigation menus for theme
	/*
	register_nav_menus( array(
		'primary' => 'Main Menu',
		'footer'  => 'Footer Menu'
	) );
	*/


	// Let wp know we are going to handle styling galleries
	/*
	add_filter( 'use_default_gallery_style', '__return_false' );
	*/


	// Stop WP from printing emoji service on the front
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );


	// Remove toolbar for all users in front end
	show_admin_bar( false );


	// Add Custom Image Sizes
	/*
	add_image_size( 'ExampleImageSize', 1200, 450, true ); // Example Image Size
	...
	*/


	// WPML configuration
	// disable plugin from printing styles and js
	// we are going to handle all that ourselves.
	define( 'ICL_DONT_LOAD_NAVIGATION_CSS', true );
	define( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true );
	define( 'ICL_DONT_LOAD_LANGUAGES_JS', true );


	// Contact Form 7 Configuration needs to be done
	// in wp-config.php. add the following snippet
	// under the line:
	// define( 'WP_DEBUG', false );
	/*
	//Contact Form 7 Plugin Configuration
	define ( 'WPCF7_LOAD_JS',  false ); // Added to disable JS loading
	define ( 'WPCF7_LOAD_CSS', false ); // Added to disable CSS loading
	define ( 'WPCF7_AUTOP',    false ); // Added to disable adding <p> & <br> in form output
	*/


	// Library Loader
	get_template_part( 'library/library-loader' );
	get_template_part( 'includes/includes-loader' );
}


/**
 * Register and/or Enqueue
 * Styles for the theme
 *
 * @since 1.0
 */
function theme_styles() {

	$theme_dir = get_template_directory_uri();

	wp_enqueue_style( 'main', "$theme_dir/assets/css/main.css", array(), null, 'all' );
}


/**
 * Register and/or Enqueue
 * Scripts for the theme
 *
 * @since 1.0
 */
function theme_scripts() {

	$theme_dir = get_template_directory_uri();

	wp_enqueue_script( 'main', "$theme_dir/assets/js/main.js", array( 'jquery' ), null, true );
}

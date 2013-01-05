<?php

// Enqueue Scripts
function bootstrap_enqueue_scripts() {
	$version = 1.0;
	$theme_uri = get_template_directory_uri();

	// Push jQuery to the bottom
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"), false, $version, true);
		wp_enqueue_script('jquery');
	}
	
	// Header Scripts
	wp_enqueue_script('modernizr', $theme_url.'/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', array(), $version, false);

	// Footer Scripts
	wp_enqueue_script('bootstrap', $theme_url.'/js/vendor/bootstrap.min.js', array('jquery'), $version, true);
}
add_action('wp_enqueue_scripts', 'bootstrap_enqueue_scripts');

// Enqueue Stylesheets
function bootstrap_enqueue_styles() {
	$version = 1.0;
	$theme_uri = get_template_directory_uri();
	
	// Styles
	wp_register_style('bootstrap-style', $theme_uri.'/style.css', array(), $version, 'all');
	wp_enqueue_style('bootstrap-style' );
}
add_action('wp_enqueue_scripts', 'bootstrap_enqueue_styles');

// Remove generator info
function bootstrap_clear_version_info() {  return ''; }
add_filter('the_generator', 'bootstrap_clear_version_info');

// Adds featured image support
if ( function_exists( 'add_theme_support' ) ) { add_theme_support( 'post-thumbnails' ); }

// Disable admin bar
add_filter('show_admin_bar', '__return_false');
?>

<?php

// Enqueue Scripts
function bc_enqueue_scripts() {
	$version = 1.0;
	$theme_uri = get_stylesheet_directory_uri();
}
add_action('wp_enqueue_scripts', 'bc_enqueue_scripts');

// Enqueue Stylesheets
function bc_enqueue_styles() {
	$version = 1.0;
	$theme_uri = get_stylesheet_directory_uri();
	
	// Dequeue bootstrap style (we've included it in style.css)
	wp_dequeue_style('bootstrap-style');

	// Styles
	wp_register_style('bc-style', $theme_uri.'/style.css', array(), $version, 'all');
	wp_enqueue_style('bc-style');
}
add_action('wp_enqueue_scripts', 'bc_enqueue_styles', 20);


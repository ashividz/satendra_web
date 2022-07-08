<?php
/**
 * ryancv-child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ryancv-child
 */

/**
 * Enqueue  styles
 */
function ryancv_child_stylesheets() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ryancv_child_stylesheets' );

/**
 * Load the parent rtl.css file
 */
function ryancv_child_enqueue_rtl_style() {
	// Dynamically get version number of the parent stylesheet
	$theme   = wp_get_theme( 'ryancv' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	if ( is_rtl() ) {
		wp_enqueue_style( 'ryancv-rtl', get_template_directory_uri() . '/rtl.css', array(), $version );
	}
}
add_action( 'wp_enqueue_scripts', 'ryancv_child_enqueue_rtl_style' );

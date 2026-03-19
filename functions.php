<?php
/**
 * Theme functions
 */

/**
 * Enqueue theme styles
 */
function pauline_styles() {
	wp_enqueue_style(
		'pauline-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		filemtime( get_template_directory() . '/assets/css/main.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'pauline_styles' );

function pauline_scripts() {
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'pauline_scripts');

/**
 * Theme setup
 */
function pauline_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

	// Custom logo support
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'pauline_theme_setup' );

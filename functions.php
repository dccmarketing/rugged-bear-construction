<?php

add_action( 'after_setup_theme', 'ruggedbear_setup' );
add_action( 'wp_enqueue_scripts', 'ruggedbear_styles' );

function ruggedbear_styles() {

	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/normalize.css' );
	wp_enqueue_style( 'ruggedbear-style', get_stylesheet_uri() );

} // ruggedbear_styles()

function ruggedbear_setup() {

	add_theme_support( 'title-tag' );

} // ruggedbear_setup()

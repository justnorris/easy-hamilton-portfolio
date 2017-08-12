<?php


function easy_hamilton_enqueue() {

	if ( is_admin() ) {
		return;
	}

	wp_enqueue_style( 'hamilton-style', get_template_directory_uri() . '/style.css', array( 'hamilton-fonts' ) );
	wp_enqueue_style( 'easy-hamilton-style', get_stylesheet_uri() );
}

add_action( 'wp_print_styles', 'easy_hamilton_enqueue' );

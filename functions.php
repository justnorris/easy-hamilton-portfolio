<?php


function easy_minimalist_portfolio_enqueue() {

	if ( is_admin() ) {
		return;
	}

	wp_enqueue_style( 'hamilton-style', get_template_directory_uri() . '/style.css', array( 'hamilton-fonts' ) );
	wp_enqueue_style( 'easy-hamilton-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'easy_minimalist_portfolio_enqueue', 100 );



/*
 * Easy Photography Portfolio Config
 */
if( class_exists('Colormelon_Photography_Portfolio')) {
	require_once get_stylesheet_directory() . '/easy-photography-portfolio.php';
}

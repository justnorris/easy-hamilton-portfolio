<?php


function minimalist_portfolio_enqueue() {

	if ( is_admin() ) {
		return;
	}

	wp_enqueue_style( 'minimalist-portfolio-hamilton-style', get_template_directory_uri() . '/style.css', array('hamilton-fonts') );
	wp_enqueue_style( 'minimalist-portfolio-style', get_stylesheet_uri() );

	wp_dequeue_script( 'masonry' );
	wp_enqueue_script( 'jquery-masonry' );
}

add_action( 'wp_enqueue_scripts', 'minimalist_portfolio_enqueue', 100 );


/*
 * Easy Photography Portfolio Config
 */
$__DIR = get_stylesheet_directory();

if ( class_exists( 'Colormelon_Photography_Portfolio' ) ) {
	require_once $__DIR . '/inc/easy-photography-portfolio.php';
}
else {
	require $__DIR . '/inc/plugins/tgm_plugin_activation.php';
	require $__DIR . '/inc/plugins/recommend_plugins.php';
}

<?php

if ( ! function_exists( 'kulta_setup' ) ) :
/* Sets up theme defaults and registers support for various WordPress features. */
function kulta_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/* Let WordPress manage the document title. */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'text_domain' ),
		'secondary' => __( 'Seconday Menu', 'text_domain' ),
		'social'  => __( 'Social Links Menu', 'text_domain' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'gallery', 'caption'
	) );

}
endif; // kulta_setup
add_action( 'after_setup_theme', 'kulta_setup' );

/* Set the content width in pixels, based on the theme's design and stylesheet. */

function kulta_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kulta_content_width', 1024 );
}
add_action( 'after_setup_theme', 'kulta_content_width', 0 );

/* Enqueue scripts and styles. */

function kulta_scripts() {

	// Foundation style.
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/app.css' );

}
add_action( 'wp_enqueue_scripts', 'kulta_scripts' );

/* https://www.pressmate.io/adding-google-fonts-to-wordpress-theme-manually/ */
function right_way_to_include_google_fonts() {
	if (!is_admin()) {
		wp_register_style('google', 'https://fonts.googleapis.com/css?family=Roboto+Slab:700', array(), null, 'all');
		wp_enqueue_style('google');
		wp_register_style('open', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700', array(), null, 'all');
		wp_enqueue_style('open');
	}
}
add_action('wp_enqueue_scripts', 'right_way_to_include_google_fonts');

/* Add featured image support */
add_theme_support( 'post-thumbnails' );

// Add featured image sizes
add_image_size( 'HD', 1920, 0, false ); // width, height, crop
add_image_size( 'WXGA', 1366, 0, false ); // width, height, crop
add_image_size( 'phone', 640, 0, false ); // width, height, crop

/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

/**
 * https://stackoverflow.com/questions/27602116/how-to-add-order-column-in-page-admin-wordpress
 */
add_filter('manage_pages_columns', 'my_columns');
function my_columns($columns) {
	$columns['order'] = 'Order';
	return $columns;
}

add_action('manage_pages_custom_column',  'my_show_columns');
function my_show_columns($name) {
	global $post;

	switch ($name) {
		case 'order':
			$views = $post->menu_order;
			echo $views;
			break;
	}
}

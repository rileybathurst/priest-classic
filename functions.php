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
	wp_enqueue_style( 'sass', get_template_directory_uri() . '/css/app.css' );
	wp_register_style( 'myguten-style', get_template_directory_uri() . '/css/gutenberg.css' );

	/* cant go here it needs to be the specific type of script
	wp_enqueue_script(
        'myguten-script',
        get_template_directory_uri() . 'myguten.js',
        array( 'wp-blocks', 'wp-element', 'wp-components' )
    ); */
}
add_action( 'wp_enqueue_scripts', 'kulta_scripts' );

// Gutenberg scripts and styles
// @link https://www.billerickson.net/block-styles-in-gutenberg/
function be_gutenberg_scripts() {
	wp_enqueue_script(
		'be-editor',
		get_stylesheet_directory_uri() . '/js/gutenberg.js',
		array( 'wp-blocks', 'wp-dom' ),
		filemtime( get_stylesheet_directory() . '/js/gutenberg.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'be_gutenberg_scripts' );

// https://www.pressmate.io/adding-google-fonts-to-wordpress-theme-manually/ */
function right_way_to_include_google_fonts() {
	if (!is_admin()) {
		wp_register_style('google', 'https://fonts.googleapis.com/css?family=Roboto+Slab:700', array(), null, 'all');
		wp_enqueue_style('google');
		wp_register_style('open', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700', array(), null, 'all');
		wp_enqueue_style('open');
	}
}
add_action('wp_enqueue_scripts', 'right_way_to_include_google_fonts');

// Add featured image support
add_theme_support( 'post-thumbnails' );

// Add featured image sizes
add_image_size( 'HD', 1920, 0, false ); // width, height, crop
add_image_size( 'WXGA', 1366, 0, false ); // width, height, crop
add_image_size( 'phone', 640, 0, false ); // width, height, crop

// https://stackoverflow.com/questions/27602116/how-to-add-order-column-in-page-admin-wordpress
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

// featured video script
function featured_video_enqueue() {
	wp_enqueue_script(
		'featured-video-script',
		get_template_directory_uri() . '/featured-video.js',
		array( 'wp-blocks', 'wp-element', 'wp-components' )
	);
}
add_action( 'enqueue_block_editor_assets', 'featured_video_enqueue' );

// featured video script
function featured_video_register_post_meta() {
	register_post_meta( '', 'featured_video_meta_block', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
	) );
}
add_action( 'init', 'featured_video_register_post_meta' );

<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Spartan Red Hot Theme' );
define( 'CHILD_THEME_URL', 'http://lifemost.co/' );
define( 'CHILD_THEME_VERSION', '1.0.0' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'srh_google_fonts' );
function srh_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:400,700', array(), CHILD_THEME_VERSION, 'screen' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), CHILD_THEME_VERSION, 'screen' );

	// Development
	wp_enqueue_style( 'normalize-css', get_stylesheet_directory_uri() . '/css/normalize.css', array(), CHILD_THEME_VERSION, 'screen' );
	wp_enqueue_style( 'foundation-css', get_stylesheet_directory_uri() . '/css/foundation.min.css', array(), CHILD_THEME_VERSION, 'screen' );
	wp_enqueue_style( 'srh-css', get_stylesheet_directory_uri() . '/css/custom.css', array(), CHILD_THEME_VERSION, 'screen' );
	
	wp_enqueue_script( 'foundation-js', get_stylesheet_directory_uri() . '/js/foundation.js', array('jquery'), CHILD_THEME_VERSION, true);
	wp_enqueue_script( 'foundation-orbit-js', get_stylesheet_directory_uri() . '/js/foundation.orbit.js', array('jquery'), CHILD_THEME_VERSION, true);
	wp_enqueue_script( 'backstretch-js', get_stylesheet_directory_uri() . '/js/vendor/backstretch.min.js', array('jquery'), CHILD_THEME_VERSION, true);
	wp_enqueue_script( 'modernizr-js', get_stylesheet_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', false);
	wp_enqueue_script( 'fastclick-js', get_stylesheet_directory_uri() . '/js/vendor/fastclick.js', array(), '1.0.3', true);

	// Development
	// wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/spartan.js', array('jquery'), CHILD_THEME_VERSION, true);

	// Production
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/spartan.min.js', array('jquery'), CHILD_THEME_VERSION, true);

	// Production
	// $srh_custom = array( 'template_url' => get_bloginfo('url') );

	// Development
	$srh_custom = array( 'template_url' => get_stylesheet_directory_uri() );

	wp_localize_script('custom-js', 'srh_custom', $srh_custom);

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

// Add image sizes
add_image_size('home thumbnail', 475, 270, array('top', 'left') );

// Remove layouts
genesis_unregister_layout( 'sidebar-content' );
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
genesis_unregister_layout( 'sidebar-content-sidebar' );

// Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove un-used elements
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

// Replace footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'srh_footer' );
function srh_footer() {
	echo 'LifeMost Internatioal Company Limited &middot; ' . do_shortcode('[footer_copyright first="2012"]') . ' &middot; All rights reserved.';
}

// Register widgets
genesis_register_sidebar( array(
	'id' 					=> 'about-us',
	'name' 				=> 'About Us',
	'description' => 'About us widget for home.'
));

genesis_register_sidebar( array(
	'id' 					=> 'solar',
	'name' 				=> 'Solar and Reusable Energy',
	'description' => 'Solar and Reusable Energy widget for home.'
));

genesis_register_sidebar( array(
	'id' 					=> 'medical',
	'name' 				=> 'Medical Consumable',
	'description' => 'Medical Consumable widget for home.'
));

genesis_register_sidebar( array(
	'id' 					=> 'sourcing',
	'name' 				=> 'Product Sourcing and OEM',
	'description' => 'Product Sourcing and OEM widget for home.'
));

genesis_register_sidebar( array(
	'id' 					=> 'contact',
	'name' 				=> 'Contact Us',
	'description' => 'Contact Us widget for home.'
));

genesis_register_sidebar( array(
	'id' 					=> 'customer',
	'name' 				=> 'Customer\'s Login',
	'description' => 'Customer\'s Login widget for home.'
));



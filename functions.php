<?php
/**
 * WizePress Theme Functions
 * @package WizePress
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define theme constants
define( 'WZP_VERSION', '1.0.0' );
define( 'WZP_DIR', get_template_directory() );
define( 'WZP_URI', get_template_directory_uri() );

// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', function () {
    // Main stylesheet (can be replaced with Tailwind build)
    wp_enqueue_style( 'wizepress-style', get_stylesheet_uri(), [], WZP_VERSION );

    // Example JS file (if needed)
    // wp_enqueue_script( 'wizepress-script', WZP_URI . '/assets/js/main.js', [], WZP_VERSION, true );
} );

// Theme supports
add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );

    // Register nav menus
    register_nav_menus([
        'primary' => __( 'Primary Menu', 'wizepress' ),
        'footer'  => __( 'Footer Menu', 'wizepress' ),
    ]);
} );

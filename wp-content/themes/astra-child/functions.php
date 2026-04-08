<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.' . time() );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
    wp_enqueue_style( 'hajimi-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
    wp_enqueue_style( 'hajimi-swiper', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
    wp_enqueue_style( 'hajimi-hamburger', get_stylesheet_directory_uri() . '/assets/css/hamburgers.min.css', array(), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
    wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
    if( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_dequeue_script('jquery');
        wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), CHILD_THEME_ASTRA_CHILD_VERSION, true );
    }
    wp_enqueue_script( 'hajimi-bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), CHILD_THEME_ASTRA_CHILD_VERSION, true );
    wp_enqueue_script( 'hajimi-swiper', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), CHILD_THEME_ASTRA_CHILD_VERSION, true );
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array(), CHILD_THEME_ASTRA_CHILD_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function year() {
    $year = new Date('Y');
    return $year;
}
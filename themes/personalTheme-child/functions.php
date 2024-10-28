<?php
// Child Theme functions and definitions for Twenty Twenty-Four
/**
 * @package Twenty Twenty-Four Child
 * @since Twenty Twenty-Four Child 1.0
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

// Enqueue child theme styles
function child_wp_enqueue_scripts() {
    wp_enqueue_style(
        'child-style', // Added quotes around the style handle
        get_stylesheet_uri()
    );
}
add_action( 'wp_enqueue_scripts', 'child_wp_enqueue_scripts' );
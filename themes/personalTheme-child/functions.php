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
        'child-style',
        get_stylesheet_uri()
    );
    
    if ( is_user_logged_in() ) {
        wp_enqueue_style(
            'app-style', 
            get_stylesheet_directory_uri() . '/assets/css/app.css'
        );
    }
    
}
add_action('wp_enqueue_scripts', 'child_wp_enqueue_scripts');
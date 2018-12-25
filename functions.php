<?php
/**
 * Screenr Child Theme Functions
 */

/**
 * Enqueue child theme style
 */
add_action( 'wp_enqueue_scripts', 'screenr_child_enqueue_styles', 15 );
function screenr_child_enqueue_styles() {
    wp_enqueue_style( 'screenr-child-style', get_stylesheet_directory_uri() . '/style.css' );
}


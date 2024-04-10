<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress_Standards_Code
 */

// Enqueue styles and scripts
function wordpress_standards_code_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    // wp_enqueue_script();
}
add_action('wp_enqueue_scripts', 'wordpress_standards_code_scripts');

function wordpress_standards_code_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'wordpress-standards-code' ),
            // You can register additional menus here if needed
        )
    );
}
add_action( 'after_setup_theme', 'wordpress_standards_code_register_menus' );


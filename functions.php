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

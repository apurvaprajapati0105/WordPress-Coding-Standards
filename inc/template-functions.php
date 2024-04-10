<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package WordPress_Standards_Code
 */

if ( ! function_exists( 'wordpress_standards_code_body_classes' ) ) :
    /**
     * Adds custom classes to the array of body classes.
     *
     * @param array $classes Classes for the body element.
     * @return array
     */
    function wordpress_standards_code_body_classes( $classes ) {
        // Add a class indicating presence of a sidebar.
        if ( is_active_sidebar( 'sidebar-1' ) ) {
            $classes[] = 'has-sidebar';
        }

        return $classes;
    }
    add_filter( 'body_class', 'wordpress_standards_code_body_classes' );
endif;

<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress_Standards_Code
 */

if ( ! function_exists( 'wordpress_standards_code_posted_on' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function wordpress_standards_code_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

        $time_string = sprintf(
            $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() )
        );

        printf(
            '<span class="posted-on">%1$s <a href="%2$s" rel="bookmark">%3$s</a></span>',
            $time_string,
            esc_url( get_permalink() ),
            esc_html( get_the_time() )
        );
    }
endif;

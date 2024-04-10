<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress_Standards_Code
 */

get_header();

// Start the loop.
while ( have_posts() ) :
    the_post();

    // Include the content template.
    get_template_part( 'template-parts/content', get_post_type() );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

// End the loop.
endwhile;

get_footer();

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress_Standards_Code
 */

get_header();
?>

<main id="primary" class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', get_post_type() );

                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div><!-- .col -->

            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</main><!-- #primary -->

<?php
get_footer();

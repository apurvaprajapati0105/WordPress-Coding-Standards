<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form. The actual display of comments is handled by a callback to
 * wordpress_standards_code_comments() which is located in the functions.php file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress_Standards_Code
 */

// If the current post is protected by a password and the visitor has not yet entered the password, return early without loading the comments.
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // If comments are open or we have at least one comment, load up the comment template.
    if ( have_comments() ) :
        ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                printf(
                    /* translators: 1: title. */
                    esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'wordpress-standards-code' ),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    /* translators: 1: number of comments. */
                    esc_html( _nx( '%1$s Comment', '%1$s Comments', $comments_number, 'comments title', 'wordpress-standards-code' ) ),
                    number_format_i18n( $comments_number )
                );
            }
            ?>
        </h2><!-- .comments-title -->

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size' => 42,
                )
            );
            ?>
        </ol><!-- .comment-list -->

        <?php
        the_comments_pagination(
            array(
                'prev_text' => '<span class="screen-reader-text">' . esc_html__( 'Previous', 'wordpress-standards-code' ) . '</span>',
                'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next', 'wordpress-standards-code' ) . '</span>',
            )
        );

    endif; // Check for have_comments().

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wordpress-standards-code' ); ?></p>
        <?php
    endif;

    comment_form();
    ?>

</div><!-- #comments -->

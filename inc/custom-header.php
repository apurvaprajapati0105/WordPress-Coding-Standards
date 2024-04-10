<?php
/**
 * Custom header implementation
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package WordPress_Standards_Code
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses wordpress_standards_code_header_style()
 */
function wordpress_standards_code_custom_header_setup() {
    $args = array(
        'default-image'          => '',
        'default-text-color'     => '000000',
        'width'                  => 1000,
        'height'                 => 250,
        'flex-height'            => true,
        'wp-head-callback'       => 'wordpress_standards_code_header_style',
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'wordpress_standards_code_custom_header_setup' );

if ( ! function_exists( 'wordpress_standards_code_header_style' ) ) :
    /**
     * Styles the header image and text displayed on the blog.
     *
     * @see wordpress_standards_code_custom_header_setup().
     */
    function wordpress_standards_code_header_style() {
        $header_text_color = get_header_textcolor();

        // If no custom options for text are set, let's bail.
        if ( HEADER_TEXTCOLOR === $header_text_color ) {
            return;
        }

        // If we get this far, we have custom styles.
        ?>
        <style type="text/css">
            .site-title a,
            .site-description {
                color: #<?php echo esc_attr( $header_text_color ); ?>;
            }
        </style>
        <?php
    }
endif;

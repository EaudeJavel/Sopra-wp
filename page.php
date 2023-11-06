<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site may use a different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sopra_Theme
 * @since Sopra theme 1.0
 */

get_header();
?>

<main id="site-content" role="main">

    <?php
    if ( have_posts() ) {

        while ( have_posts() ) {
            the_post();

            get_template_part( 'template-parts/content', 'page' );

            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        }

    } else {

        get_template_part( 'template-parts/content', 'none' );

    }
    ?>

</main><!-- #site-content -->

<?php get_footer(); ?>

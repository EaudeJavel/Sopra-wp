<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sopra
 */

	get_header();
?>

<div id="fullpage">
    <div class="section">One</div>
    <div class="section">Two</div>
    <div class="section">
      <div class="content">Three</div>
    </div>
    <div class="section fp-auto-height">
      <div class="content">Four</div>
  </div>
</div>


<?php get_footer();

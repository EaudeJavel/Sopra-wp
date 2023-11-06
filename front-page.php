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
 * @package Sopratheme
 */

	get_header();
?>

<div id="fullpage">
    <div class="section">
        <div class="slide">Slide 1</div>
        <div class="slide">Slide 1.2</div>
    </div>
	<div class="section">Section 2</div>
	<div class="section fp-auto-height">
		<div>Section 3</div>

	</div>
</div>

<?php get_footer(); ?>
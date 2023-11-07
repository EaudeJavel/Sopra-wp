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
        <div class="slide hero-slide hero">
			<!-- if homepage has field slide-1, then  -->
			<?php
				$hero = get_field('slide-1');
				if( $hero ):
			?>
			<div class="hero-data-container">
				<h2 class="slide-title"><?php echo $hero['slide-title'];?></h2>
				<h1 class="main-title"><?php echo $hero['main-title'];?></h1>

				<button class="btn btn-primary"><?php echo $hero['button-text'];?></button>
			</div>
			<?php endif;

				get_template_part( 'templates/content', 'whitepapers' ); ?>

		</div>

		<div class="slide hero-slide-right">
			<!-- if homepage has field slide-2, then  -->
			<?php
				$hero = get_field('slide-2');
				if( $hero ):
			?>
			<div class="hero-data-container">
				<h2 class="slide-title"><?php echo $hero['slide-title'];?></h2>
				<h1 class="main-title"><?php echo $hero['main-title'];?></h1>

				<button class="btn btn-primary"><?php echo $hero['button-text'];?></button>
			</div>
			<?php endif;

				get_template_part( 'templates/content', 'whitepapers' ); ?>

		</div>
    </div>
	<div class="section section-our_mission">

		<div>Section 2</div>

	</div>
	<div class="section fp-auto-height section-footer">

		<div>Section 3</div>

	</div>
</div>

<?php get_footer(); ?>


 <!-- <div class="bg-image">
				<img src="<?php //echo get_template_directory_uri() . '/assets/images/homepage/vector5.svg'; ?>" alt="Hero Background Image">
			</div>
			<div class="bg-image-photo">
				<img src="<?php //echo get_template_directory_uri() . '/assets/images/homepage/img2.png'; ?>" alt="Hero Background Image">
			</div> -->
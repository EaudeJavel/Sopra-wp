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
			<div id="bg" className="bg-fixed"></div>
			<div id="bg-svg" className="bg-fixed"></div>
			<div id="bg-img" className="bg-fixed"></div>
			<!-- if homepage has field slide-1, then  -->
			<?php
				$hero = get_field('slide-1');
				if( $hero ):
			?>
			<div class="hero-data-container">
				<div class="hero-data-container__container">
					<h2 class="hero-data-container__container__title"><?php echo $hero['slide-title'];?></h2>
					<h3 class="hero-data-container__container__pagination">
						<span class="hero-data-container__container__pagination__number">01</span>
						/02
					</h3>
				</div>

				<h1 class="main-title"><?php echo $hero['main-title'];?></h1>

				<button class="btn btn-primary"><?php echo $hero['button-text'];?></button>
			</div>
			<?php endif;
				get_template_part( 'templates/content', 'whitepapers' ); ?>
		</div>

		<div class="slide hero-slide-right">
			<div id="s1-bg"></div>
			<div id="s1-svg"></div>
			<div id="s1-img"></div>

			<!-- if homepage has field slide-2, then  -->
			<?php
				$hero = get_field('slide-2');
				if( $hero ):
			?>
			<div class="hero-data-container">
				<div class="hero-data-container__container">
					<h2 class="hero-data-container__container__title"><?php echo $hero['slide-title'];?></h2>
					<h3 class="hero-data-container__container__pagination">
						<span class="hero-data-container__container__pagination__number">02</span>
						/02
					</h3>
				</div>


				<h1 class="main-title"><?php echo $hero['main-title'];?></h1>

				<button class="btn btn-primary"><?php echo $hero['button-text'];?></button>
			</div>
			<?php endif;

				get_template_part( 'templates/content', 'whitepapers' ); ?>

		</div>
    </div>
	<div class="section section-our_mission">
		<div id="s2-bg" className="bg-fixed"></div>
		<div id="s2-svg" className="bg-fixed"></div>
		<div id="s2-img" className="bg-fixed"></div>

		<!-- if homepage has field slide-3, then  -->
			<?php
				$hero = get_field('slide-3');
				if( $hero ):
			?>
			<div class="hero-data-container">
				<h2 class="hero-data-container__container__title"><?php echo $hero['slide-title'];?></h2>

				<h1 class="hero-data-container__container__description"><?php echo $hero['slide-description'];?></h1>

				<button class="btn hero-data-container__container__btn-secondary"><?php echo $hero['button-text'];?></button>
			</div>
			<?php endif;
				get_template_part( 'templates/content', 'videos' ); ?>
		</div>

	<div class="section fp-auto-height section-footer">
			<div class="footer-menus">
				<?php
					// add title for each menu
					$footer_menus = array(
						'f_menu_offers'    => 'Offers',
						'f_menu_services'  => 'Services',
						'f_menu_company'   => 'Company',
						'f_menu_followus'  => 'Follow Us',
						'f_menu_contact'   => 'Contact'
					);

					// display each title before the menu
					foreach ($footer_menus as $menu_key => $menu_title) {
						echo '<div class="footer-menus__section">';
						echo '<h3 class="footer-menus__section__title">' . esc_html__( $menu_title, 'sopra' ) . '</h3>';
						wp_nav_menu( array(
							'theme_location' => $menu_key,
							'container'      => 'nav',
							'menu_class'     => 'footer-menus__section__single',
							'fallback_cb'    => false
						));
						echo '</div>';
					}
				?>
			</div>
				<!-- <select name="lang" id="lang" class="footer-menus__lang">
					<option value="english">english</option>
					<option value="french">french</option>
				</select> -->

			<div class="separator"></div>

			<!-- Menu -->
				<?php
					wp_nav_menu( array(
						'theme_location' => 'f_menu_legal',
						'container' => 'nav',
						'menu_class' => 'menu',
						'fallback_cb' => false // Do not fall back to wp_page_menu()
					) );
				?>

			<div class="footer-bottom-container">
				<div class="copyright">© Sopra Banking Software. All right Reserved. ® Sopra Banking Software is a registered trademark of Sopra Steria</div>
				<?php
					if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
						the_custom_logo();
					} else {
						echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
						echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/Sopra Logos Final - 200717_color-white' . get_bloginfo( 'name' ) . '" />';
						echo '</a>';
					}
				?>
			</div>
		</div>
</div>

<?php get_footer(); ?>


 <!-- <div class="bg-image">
				<img src="<?php //echo get_template_directory_uri() . '/assets/images/homepage/vector5.svg'; ?>" alt="Hero Background Image">
			</div>
			<div class="bg-image-photo">
				<img src="<?php //echo get_template_directory_uri() . '/assets/images/homepage/img2.png'; ?>" alt="Hero Background Image">
			</div> -->
<?php
/**
 * The Header template for sopra theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" type="text/css" href="fullpage.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php
				/* translators: Hidden accessibility text. */
				esc_html_e( 'Skip to content', 'sopratheme' );
			?>
		</a>

	<!-- TODO: register menu dynamically instead -->
		<header class="header">
			<div class="header-menu">

				<!-- Logo -->
				<!-- fix the issue where i had two links created and rendered -->
				<?php
					if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
						the_custom_logo();
					} else {
						echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
						echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/Sopra Logos Final - 200717_color-white' . get_bloginfo( 'name' ) . '" />';
						echo '</a>';
					}
				?>

				<!-- Menu -->
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary_menu',
						'container' => 'nav',
						'menu_class' => 'menu',
						'fallback_cb' => false // Do not fall back to wp_page_menu()
					) );
				?>

				<div class="right-holder">
					<!-- Contact Button -->
					<button class="contact-button">Contact Us</button>

				</div>
			</div>
		</header>

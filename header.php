<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="page" class="hfeed site">

			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<div class="background red">

				<header id="masthead" class="red" role="banner">

					<div class="red site-branding">

						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

								<img class="logo" src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-tent-white.svg" alt="" />

						</a>

						<nav id="site-navigation" class="main-navigation" role="navigation">

							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>

							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

						</nav><!-- #site-navigation -->

					</div><!-- .site-branding -->

				</header><!-- #masthead -->

			</div><!-- #background -->

			<div id="content" class="site-content">

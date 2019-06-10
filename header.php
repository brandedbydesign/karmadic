<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package karmadic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'karmadic' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">

			<div class="row">
				<div class="col-md-6">
					<div id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="company logo" /></a>
						<!--<h2 class="site-description"><?php // bloginfo( 'description' ); ?></h2>-->
					</div><!-- #logo -->
				</div><!-- .col -->
			</div><!-- .row -->

			<div class="row">
				<nav id="site-navigation" class="navbar navbar-default">
					<div class="navbar-header">
                    	<!--<a class="navbar-brand visible-xs" href="#">Main Menu</a>-->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar">
							<span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div><!-- .navbar-header -->

					<?php wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 3,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'primary-navbar',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
						);
					?>
				</nav><!-- #site-navigation -->
			</div><!-- .row -->

		</div><!-- .container -->
	</header><!-- .site-header -->

	<div id="content" class="site-content">
		<div class="container">

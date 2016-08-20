<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
	<div class="site-layout">
	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="row" data-equalizer>
				<div class="small-10 mediun-8 large-6 columns">
					<div class="logo-wrapper" data-equalizer-watch>
						<div class="logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/glc-logo.png')"></div>
						<h2 class="logo-headline">
							Empowering <br> 
							future leaders <br>
							to reach their goals
						</h2>
					</div>
				</div>
				<div class="small-2 medium-4 large-6 columns">
					<div class="menu-top" data-equalizer-watch>
						<div class="align-bottom">
							<p>Welcome Guest!</p>
							<p class="lang-selection">
								<i class="fa fa-globe" aria-hidden="true"></i>
								<span>Laguage</span>
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</p>
						</div>
					</div>
				</div>
				<div class="small-12 columns">
					<div class="menu-bottom">
						<ul class="menu">
							<li class="active" ><a href="">Home</a></li>
							<li><a href="">about us</a></li>
							<li><a href="">What is SSAP?</a></li>
							<li><a href="">Gallery</a></li>
							<li><a href="">Community</a></li>
							<li><a href="">My Page</a></li>
							<li><a href="">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<section class="container">

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
	
	<div id="loadOverlay" style="background-color:#fff;height:100vh;width:100%;position:fixed;top:0;z-index:999999;opacity:1;transition: 0.5s ease;"></div>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
	<div class="site-layout">
	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation">
			<div class="row">
				<div class="small-6 medium-4 columns">
					<div class="logo-wrapper">
						<button data-toggle="mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></button>
						<div class="logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/glc-logo.png')"></div>
					</div>
				</div>
				<div class="small-6 medium-8 columns">
					<div class="menu-top">
						<div class="align-bottom">
							<p>Welcome Guest!</p>
							<p class="lang-selection">
								<i class="fa fa-globe" aria-hidden="true"></i>
								<span>Language</span>
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</p>
						</div>
					</div>
				</div> 
				<div class="small-12 columns menu-bottom-container">
					<div class="menu-bottom">
						<?php wp_nav_menu('primary'); ?>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<section class="container">

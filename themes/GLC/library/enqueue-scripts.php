<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	// Enqueue the main Stylesheet.
	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/foundation.css', array(), '2.6.1', 'all' );

	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/javascript/vendor/jquery/jquery.min.js', array(), '2.2.4', false );

	// Masonry
	wp_enqueue_script( 'masonry-grid',  get_template_directory_uri() . '/assets/javascript/vendor/masonry/masonry.pkgd.min.js', array('jquery'), '4.1.1', true);

	// Slick slider
	wp_enqueue_script( 'slick',  get_template_directory_uri() . '/assets/javascript/vendor/slick-carousel/slick.min.js', array('jquery'), '1.6.0', false );

	// If you'd like to cherry-pick the foundation components you need in your project, head over to gulpfile.js and see lines 35-54.
	// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/javascript/foundation.js', array('jquery'), '2.6.1', true );

	// Add google fonts
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700',array(),'',false);

	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;

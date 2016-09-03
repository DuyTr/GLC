<?php
// Register Menu
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  	register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

// Gallery Post type
function create_posttype() {

	register_post_type( 'gallery',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Galleries' ),
				'singular_name' => __( 'Gallery' )
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'gallery'),
			'menu_icon' => 'dashicons-format-gallery',
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

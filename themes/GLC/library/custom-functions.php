<?php
// Register Menu
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  	register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
  	register_nav_menu( 'ssap', __( 'SSAP Menu', 'theme-slug' ) );
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
			'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

// Add options page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Theme Settings');

}
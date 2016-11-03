<?php
/**
 * Menus configuration.
 *
 * @package Plumberpro
 */

add_action( 'after_setup_theme', 'plumberpro_register_menus', 5 );
function plumberpro_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'plumberpro' ),
		'main'   => esc_html__( 'Main', 'plumberpro' ),
		'footer' => esc_html__( 'Footer', 'plumberpro' ),
		'social' => esc_html__( 'Social', 'plumberpro' ),
	) );
}

<?php
/**
 * Thumbnails configuration.
 *
 * @package Plumberpro
 */

add_action( 'after_setup_theme', 'plumberpro_register_image_sizes', 5 );
function plumberpro_register_image_sizes() {
	set_post_thumbnail_size( 1170, 850, true );

	// Registers a new image sizes.
	add_image_size( 'plumberpro-thumb-s', 116, 116, true );
	add_image_size( 'plumberpro-thumb-180', 180, 180, true );
	add_image_size( 'plumberpro-thumb-270', 270, 270, true );
	add_image_size( 'plumberpro-thumb-m', 370, 200, true );
	add_image_size( 'plumberpro-thumb-550', 550, 550, true );
	add_image_size( 'plumberpro-post-thumbnail-large', 1170, 850, true );
	add_image_size( 'plumberpro-thumb-l', 1170, 550, true );
}

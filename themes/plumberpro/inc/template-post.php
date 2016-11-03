<?php
/**
 * Post Template Functions.
 *
 * @package Plumberpro
 */

/**
 * Show blog post content.
 *
 * @return void
 */
function plumberpro_blog_content() {

	$blog_content = get_theme_mod( 'blog_posts_content', plumberpro_theme()->customizer->get_default( 'blog_posts_content' ) );

	if ( ! in_array( $blog_content, array( 'full', 'excerpt' ) ) ) {
		$blog_content = 'excerpt';
	}

	switch ( $blog_content ) {
		case 'full':
			plumberpro_post_content();
			break;

		case 'excerpt':
			plumberpro_post_excerpt( array( 'length' => 45, 'more' => '&hellip;' ) );
			break;
	}

}

/**
 * Print the post excerpt.
 *
 * @return void
 */
function plumberpro_post_excerpt( $args = array() ) {

	$args = wp_parse_args( $args, array(
		'length' => 55,
		'more'   => '',
	) );

	if ( has_excerpt() ) {
		the_excerpt();
	} else {
		/* wp_trim_excerpt analog */
		$content = strip_shortcodes( get_the_content( '' ) );
		$content = apply_filters( 'the_content', $content );
		$content = str_replace( ']]>', ']]&gt;', $content );
		$content = wp_trim_words( $content, $args['length'], $args['more'] );

		echo $content;
	}
}

/**
 * Show full post content.
 *
 * @return void
 */
function plumberpro_post_content() {

	the_content( sprintf(
		/* translators: %s: Name of current post. */
		wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'plumberpro' ), array( 'span' => array( 'class' => array() ) ) ),
		the_title( '<span class="screen-reader-text">"', '"</span>', false )
	) );

	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'plumberpro' ),
		'after'  => '</div>',
	) );

}

/**
 * Show post thumbnail.
 *
 * @return void
 */
function plumberpro_post_thumbnail( $linked = false, $sizes = array() ) {

	if ( ! has_post_thumbnail() ) {
		return;
	}

	$sizes = wp_parse_args( $sizes, array(
		'small'     => 'plumberpro-thumb-m',
		'fullwidth' => 'plumberpro-post-thumbnail-large',
	) );

	$linked_format = apply_filters(
		'plumberpro_linked_post_thumbnail_format',
		'<a href="%2$s" class="post-thumbnail__link %3$s">%1$s</a>'
	);

	$single_format = apply_filters(
		'plumberpro_single_post_thumbnail_format',
		'%1$s'
	);

	$extra_classes   = array();
	$extra_classes[] = 'post-thumbnail__img';
	$link_class      = 'post-thumbnail--fullwidth';

	$size = apply_filters( 'plumberpro_post_thumbail_size', false );

	if ( false === $size ) {



		if ( ! is_single() ) {
			$size = get_theme_mod(
				'blog_featured_image',
				plumberpro_theme()->customizer->get_default( 'blog_featured_image' )
			);
		} else {
			$size = 'fullwidth';
		}

		$link_class = sanitize_html_class( 'post-thumbnail--' . $size );
		$size       = isset( $sizes[ $size ] ) ? esc_attr( $sizes[ $size ] ) : 'post-thumbnail';
	}

	$format = ( true === $linked ) ? $linked_format : $single_format;

	printf( $format,
		get_the_post_thumbnail( get_the_id(), $size, array( 'class' => join( ' ', $extra_classes ) ) ),
		get_permalink(),
		$link_class
	);

}

/**
 * Show read more button.
 *
 * @return void
 */
function plumberpro_read_more() {
	$button_text = get_theme_mod( 'blog_read_more_text', plumberpro_theme()->customizer->get_default( 'blog_read_more_text' ) );

	if ( ! $button_text ) {
		return;
	}

	$format = apply_filters( 'plumberpro_read_more_button_format', '<a href="%2$s" class="btn"><span class="btn__text">%1$s</span><span class="btn__icon"></span></a>' );

	printf( $format, wp_kses( $button_text, wp_kses_allowed_html( 'post' ) ), esc_url( get_permalink() ) );
}

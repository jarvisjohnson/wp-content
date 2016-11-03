<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Plumberpro
 */

// Don't show top panel if all elements are disabled
if ( ! plumberpro_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel">
	<div <?php echo plumberpro_get_container_classes( array( 'top-panel__wrap' ), 'header' ); ?>>
		<?php
			plumberpro_top_message( '<div class="top-panel__message">%s</div>' );
			if ( ( get_theme_mod('header_layout_type') == 'minimal' ) ||
			     ( get_theme_mod('header_layout_type') == 'centered' ) ) { ?>
				<div class="site-info">
					<?php
					plumberpro_header_phone_message( '<div class="phone__info">%s</div>' );
					plumberpro_header_time_message( '<div class="time__info">%s</div>' );
					?>
				</div>
			<?php }
			plumberpro_social_list( 'header' );
			plumberpro_top_menu();
			plumberpro_top_search( '<div class="header__search">%s<span class="search__toggle fa fa-search"></span></div>' );
		?>
	</div>
</div><!-- .top-panel -->



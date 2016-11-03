<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Plumberpro
 */
?>

<div class="footer-area-wrap ">
	<div class="container">
		<?php do_action( 'plumberpro_render_widget_area', 'footer-area' ); ?>
	</div>
</div>

<div class="footer-container">
	<div <?php echo plumberpro_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info">
			<div class="site-info__mid-box"><?php
				plumberpro_footer_logo();
				plumberpro_footer_copyright();
				plumberpro_footer_menu();
			?></div>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->

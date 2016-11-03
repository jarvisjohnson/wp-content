<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Plumberpro
 */

?>
<div class="footer-container">
	<div <?php echo plumberpro_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<?php
			plumberpro_footer_copyright();
			plumberpro_footer_menu();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->
<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Plumberpro
 */
?>

<div class="footer-container">
	<div <?php echo plumberpro_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info__flex">
			<div class="site-info__mid-box"><?php
				plumberpro_footer_copyright();
				plumberpro_footer_menu();
			?></div>
			<?php plumberpro_social_list( 'footer' ); ?>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->
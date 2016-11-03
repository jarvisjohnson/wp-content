<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Plumberpro
 */
?>


<div class="site-branding">
	<?php plumberpro_header_logo() ?>
	<?php plumberpro_site_description(); ?>
</div>

<div class="site-info">
	<?php
		plumberpro_header_phone_message( '<div class="phone__info">%s</div>' );
		plumberpro_header_time_message( '<div class="time__info">%s</div>' );
	?>
</div>

<div class="site-menu">
	<?php plumberpro_main_menu(); ?>
</div>


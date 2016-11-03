<?php
/**
 * Template part for minimal Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Plumberpro
 */
?>

<div class="header-container__flex">
	<div class="site-branding">
		<?php plumberpro_header_logo() ?>
		<?php plumberpro_site_description(); ?>
	</div>

	<div class="site-menu">
		<?php plumberpro_main_menu(); ?>
	</div>
</div>

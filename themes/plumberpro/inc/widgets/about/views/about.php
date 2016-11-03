<?php
/**
 * Template part to display About __Tm widget.
 *
 * @package Plumberpro
 * @subpackage widgets
 */
?>

<div class="widget-about__logo">
	<a class="widget-about__logo-link" href="<?php echo $home_url; ?>">
		<img class="widget-about__logo-img" src="<?php echo $logo_url; ?>" alt="<?php echo $site_name; ?>">
	</a>
</div>
<div class="widget-about__tagline"><?php echo $tagline; ?></div>
<div class="widget-about__content"><?php echo $content; ?></div>
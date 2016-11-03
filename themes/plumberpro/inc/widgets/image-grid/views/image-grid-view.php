<?php
/**
 * Template part to display Image Grid widget.
 *
 * @package Plumberpro
 * @subpackage widgets
 */
?>

<div class="widget-image-grid__holder  col-xs-12 col-sm-6 col-md-<?php echo $columns_class; ?> col-lg-<?php echo $columns_class; ?>">
	<figure class="widget-image-grid__inner" <?php echo $inline_style; ?>>
		<?php echo $image; ?>
	</figure>

	<figcaption class="widget-image-grid__content">
		<h5 class="widget-image-grid__title">
			<a href="<?php echo $permalink; ;?>"><?php echo $title; ?></a>
		</h5>
		<p><?php echo $content; ?></p>
		<a href="<?php echo $permalink; ?>" class="btn">Read more</a>
	</figcaption>
</div>
<?php
/**
 * Template part to display Carousel widget.
 *
 * @package Plumberpro
 * @subpackage widgets
 */
?>

<div class="inner">
	<div class="content-wrapper">
		<header class="entry-header">
			<?php echo $image; ?>
			<div class="post__cats"><?php echo $terms_line; ?></div>
		</header>
		<div class="entry-content">
			<?php echo $title; ?>
			<?php echo $content; ?>
		</div>
	</div>
	<footer class="entry-footer">
		<div class="entry-meta">
			<span class="post__author vcard"><span><?php echo esc_html__( 'by ', 'plumberpro' ); ?></span><?php echo $author; ?></span>
			<span class="post__date"><?php echo $date; ?></span>
			<span class="post__comments"><?php echo $comments; ?></span>
		</div>
		<?php echo $more_button; ?>
	</footer>
</div>
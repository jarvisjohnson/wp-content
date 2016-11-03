<?php
/**
 * Template part for posts pagination.
 *
 * @package Plumberpro
 */
the_posts_pagination(
	array(
		'prev_text' => '<span> <i class="material-icons">navigate_before</i>Prev</span>',
		'next_text' => '<span>Next<i class="material-icons">navigate_next</i></span>'
	)
);

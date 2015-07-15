<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Domino
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function domino_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'domino_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function domino_jetpack_setup
add_action( 'after_setup_theme', 'domino_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function domino_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function domino_infinite_scroll_render

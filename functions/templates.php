<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Domino
 */

if ( ! function_exists( 'domino_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function domino_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( '%s', 'post date', 'domino' ),
		'<i class="fa fa-calendar"></i> <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( '<i class="fa fa-user"></i> %s', 'post author', 'domino' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

}
endif;

if(!function_exists('the_social_links')):
function the_social_links() {

	$result = "";
	$services = ['twitter', 'facebook', 'linkedin', 'google-plus', 'youtube'];
	foreach ($services as $service) {
		$link = tmod('general', 'social', $service);
		if(!empty($link)) {
			$result .= '<a href="'. $link .'" class="social-icon '. $service .'"><i class="fa fa-'. $service .'"></i></a>'
		}
	}

	echo $result;
}
endif;

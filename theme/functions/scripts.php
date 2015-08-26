<?php

/**
 * Enqueue scripts
 */
function domino_scripts() {
    wp_enqueue_style('domino-style', get_stylesheet_uri());
    wp_enqueue_script('domino-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), 20120206, true);
    wp_enqueue_script( 'domino-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

    // Scripts
    // Uncomment if needed
    // wp_dequeue_script('jQuery');
    // wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 20120206, true);
    // wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), 20120206, true);

    if(is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action( 'wp_enqueue_scripts', 'domino_scripts' );
<?php

/**
 * Domino setup functions
 */
if(!function_exists('domino_setup')):
function domino_setup() {
    load_theme_textdomain('domino', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __("Primary Menu", "domino")
    ));

    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ));

    add_theme_support('post-formats', array(
        'aside', 'image', 'video', 'quote', 'link',
    ));
}
add_action('after_setup_theme', 'domino_setup');
endif;


/**
 * Automatically create the home and blog pages. This function
 * will also update the settings for static pages under Settings > Reading.
 */
if(!function_exists('setup_home_and_blog_pages')):
function setup_home_and_blog_pages() {
    $home_page = array('post_name'=>'home', 'post_title'=>'Home', 'post_status'=>'publish', 'post_type'=>'page');
    $blog_page = array('post_name'=>'blog', 'post_title'=>'Blog', 'post_status'=>'publish', 'post_type'=>'page');

    if(!get_option('page_on_front') && !get_option('page_for_posts') && get_option('show_on_front') !== 'page') {
        if(get_page_by_title('home') === NULL && get_page_by_title('blog') === NULL) {
            $home = wp_insert_post($home_page);
            $blog = wp_insert_post($blog_page);
        }

        $home = get_page_by_title('home');
        $blog = get_page_by_title('blog');

        update_option('page_on_front', $home->ID);
        update_option('page_for_posts', $blog->ID);
        update_option('show_on_front', 'page');
    }
}

// Only call this function if the config option is set.
if($config['create_static_pages']){
    add_action('init', 'setup_home_and_blog_pages');
}
endif;
<?php
/**
 * Domino functions and definitions
 *
 * @package Domino
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
    $content_width = 640; /* pixels */
}

if(!function_exists('domino_setup')) {

    function domino_setup() {
        // Make the theme available for translation.
        load_theme_textdomain('domino', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // This theme does not use hard-coded <title> tag
        add_theme_support('title-tag');

        // Enable support for post Thumbnails
        add_theme_support('post-thumbnails');
        
        // Setup the main menus
        register_nav_menus(array(
            'primary' => __("Primary Menu", 'domino'),
        ));

        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'domino_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }

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

    // Sets up the home and blog pages. Comment out if needed.
    add_action('init', 'setup_home_and_blog_pages');

    // Setup the theme.
    add_action('after_setup_theme', 'domino_setup');

    // Blox - simple meta boxes library
    require get_template_directory() . '/functions/blox/blox.php';
    new Blox;

    require get_template_directory() . '/functions/scripts.php';
    require get_template_directory() . '/functions/widgets.php';
    require get_template_directory() . '/functions/template-tags.php';
    require get_template_directory() . '/functions/extras.php';
    require get_template_directory() . '/functions/customizer.php';
    require get_template_directory() . '/functions/jetpack.php';
}
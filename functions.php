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

if ( ! function_exists( 'domino_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function domino_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Domino, use a find and replace
	 * to change 'domino' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'domino', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'domino' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'domino_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // domino_setup
add_action( 'after_setup_theme', 'domino_setup' );

// Implement the Custom Header feature.
//require get_template_directory() . '/functions/custom-header.php';

// Metaboxes
require get_template_directory() . '/functions/boxes/boxes.php';
new Boxes;

// Load scripts and styles for this theme.
require get_template_directory() . '/functions/scripts.php';

// Widgets
require get_template_directory() . '/functions/widgets.php';

// Custom template tags for this theme.
require get_template_directory() . '/functions/template-tags.php';

// Custom functions that act independently of the theme templates.
require get_template_directory() . '/functions/extras.php';

// Customizer Additions
require get_template_directory() . '/functions/customizer.php';

// Load Jetpack compatibility file.
require get_template_directory() . '/functions/jetpack.php';

<?php
/**
 * The header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Domino
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="widget=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- <a class="skip-link screen-reader-text" href=""><?php esc_html_e( 'Skip to content', 'domino' ); ?></a> -->

    <!-- Start Header -->
    <header id="header" class="site-header">
      <div class="container">
        <div class="site-branding">
          <div class="site-logo">
            <img src="http://placehold.it/50x50" alt="">
          </div>
          <div class="site-info">
            <div class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></div>
            <div class="site-description"><?php bloginfo( 'description' ); ?></div>
          </div>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
        </nav>
      </div>
    </header>

    <div id="content">
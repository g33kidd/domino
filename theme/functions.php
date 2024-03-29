<?php
/**
 * Domino functions and requires different modules.
 */

// Sets up the theme.
require get_template_directory() . '/functions/config.php';
require get_template_directory() . '/functions/setup.php';

// Blox - simple meta boxes library
if($config['enable_blox_meta_boxes']) {
  require get_template_directory() . '/functions/blox/blox.php';
  require get_template_directory() . '/functions/blox/metaboxes.php';
}

if($config['enable_modules']) {
  require get_template_directory() . '/functions/modules/base.php';
  require get_template_directory() . '/functions/modules/setup.php';
}

if($config['enable_domino_customizer']) {
  require get_template_directory() . '/functions/customizer/customizer.php';
  require get_template_directory() . '/functions/customizer/helpers.php';
  new Domino_Customizer;
}

require get_template_directory() . '/functions/scripts.php';
require get_template_directory() . '/functions/helpers.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/templates.php';
require get_template_directory() . '/functions/extras.php';

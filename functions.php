<?php
/**
 * Domino functions and requires different modules.
 */

// Sets up the theme.
require get_template_directory() . '/functions/domino-config.php';
require get_template_directory() . '/functions/setup.php';

// Blox - simple meta boxes library
require get_template_directory() . '/functions/blox/blox.php';
require get_template_directory() . '/functions/blox/metaboxes.php';

/**
 * Domino Customizer
 *
 * Only enable the customizer if 'enable_domino_customizer' configuration
 * has been set to true.
 */
if($config['enable_domino_customizer']):
    require get_template_directory() . '/functions/customizer/customizer.php';
    new Domino_Customizer;
endif;

require get_template_directory() . '/functions/scripts.php';
require get_template_directory() . '/functions/helpers.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/template-tags.php';
require get_template_directory() . '/functions/extras.php';
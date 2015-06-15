<?php

/**
 * Gets theme_mod from WordPress
 */
if(!function_exists('tmod')):
function tmod($panel, $section, $setting) {
    return get_theme_mod("domino_{$panel}_{$section}-{$setting}");
}
endif;
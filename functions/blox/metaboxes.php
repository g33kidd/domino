<?php

$page_settings = new Blox_MetaBox(array(
    'id' => '_page_settings',
    'title' => 'Page Settings',
    'type' => 'page', // Can separate with pipes: page|post|events
    'context' => 'side',
    'priority' => 'default',
    'template' => get_template_directory() . '/functions/blox/templates/page-settings.php',
    'fields' => ['sidebar_position']
));
<?php

/**
 * Adds custom classes to the array of body classes.
 * @param array $classes Classes for the body element
 * @return array
 */
function domino_body_classes($classes) {
    if(is_multi_author()) {
        $classes[] = 'group-blog';
    }
    return $classes;
}
add_filter('body_class', 'domino_body_classes');

/**
 * Gets the sidebar position
 * left, right, none
 * @return string
 */
if(!function_exists('get_sidebar_position')):
function get_sidebar_position() {
    $page = get_queried_object_id();
    $sidebar_position = get_post_meta($page, 'sidebar_position', true);
    if($sidebar_position) {
        return $sidebar_position;
    }else {
        return false;
    }
}
endif;

/**
 * Returns the sidebar column class based on
 * the page settings.
 * @return string
 */
if(!function_exists('get_sidebar_class')):
function get_sidebar_class() {
    if(is_page()) {
        $page = get_queried_object_id();
        $position = get_sidebar_position($page);
        if($position === 'left') {
            return 'col-md-3 col-md-pull-9';
        }else if($position === 'right') {
            return 'col-md-3';
        }else {
            return;
        }
    }else{
        return 'col-md-3';
    }
}
endif;

/**
 * Returns the main content class based on
 * the page settings.
 * @return string
 */
if(!function_exists('get_content_class')):
function get_content_class() {
    if(is_page()) {
        $page = get_queried_object_id();
        $position = get_sidebar_position($page);
        if($position === 'left') {
            return 'col-md-9 col-md-push-3';
        }else if($position === 'right') {
            return 'col-md-9';
        }else if($position === 'none'){
            return 'col-md-12';
        }
    }else{
       return 'col-md-9';
    }
}
endif;

/**
 * Determines if the sidebar is enabled for the page.
 * @return boolean
 */
if(!function_exists('is_sidebar_enabled')):
function is_sidebar_enabled() {
    if(is_page()) {
        $page = get_queried_object_id();
        $position = get_sidebar_position($page);
        if($position != 'none') {
            return true;
        }
    }else{
        return true;
    }

    return false;
}
endif;

?>
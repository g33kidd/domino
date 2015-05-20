<?php

/**
 * Gets the sidebar position
 * left, right, none
 * @return [string]       [position of sidebar]
 */
function get_sidebar_position() {
    $page = get_queried_object_id();
    $sidebar_position = get_post_meta($page, 'sidebar_position', true);
    if($sidebar_position) {
        return $sidebar_position;
    }else {
        return false;
    }
}

/**
 * Returns the sidebar column class based on
 * the page settings.
 * @return [string]       [column classes]
 */
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

/**
 * Returns the main content class based on
 * the page settings.
 * @return [string]       [column classes]
 */
function get_content_class() {
    $page = get_queried_object_id();
    if(is_page()) {
        $position = get_sidebar_position($page);
        if($position === 'left') {
            return 'col-md-9 col-md-push-3';
        }else if($position === 'right') {
            return 'col-md-9';
        }else if($position === 'none'){
            return 'col-md-12';
        }
    }

    return $page;
}

/**
 * Determines if the sidebar is enabled for the page.
 * @return boolean
 */
function is_sidebar_enabled() {
    if(is_page()) {
        $page = get_queried_object_id();
        $position = get_sidebar_position($page);
        if($position === 'none') {
            return false;
        }else{
            return true;
        }
    }else{
        return true;
    }
}

?>
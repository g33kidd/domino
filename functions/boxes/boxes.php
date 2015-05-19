<?php

class Boxes {

    public function __construct() {
        add_action('add_meta_boxes', array($this, 'add_meta_box'));
        add_action('save_post', array($this, 'save'));
    }

    public function add_meta_box($post_type) {
        add_meta_box(
            'domino-page-meta',
            __('Page Settings', 'domino'),
            array($this, 'display_meta_box'),
            'page',
            'side',
            'low'
        );
    }

    public function save($post_id) {
        if(isset($_POST['sidebar_enabled'])) {
            update_post_meta($post_id, 'sidebar_enabled', $_POST['sidebar_enabled']);
        }else{
            update_post_meta($post_id, 'sidebar_enabled', '');
        }
    }

    public function display_meta_box($post) {
        $sidebar_enabled = get_post_meta($post->ID, 'sidebar_enabled', true);
        if($sidebar_enabled === '1') {
            $checked = 'checked="checked"';
        }
        echo '<label for="sidebarEnabled" class="selectit">
              <input type="checkbox" id="sidebarEnabled" name="sidebar_enabled" value="1" '. $checked .'></input> Sidebar Enabled
              </label>';
    }

}
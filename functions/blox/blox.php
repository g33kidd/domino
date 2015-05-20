<?php

class Blox {

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
        if(isset($_POST['sidebar_position'])) {
            update_post_meta($post_id, 'sidebar_position', $_POST['sidebar_position']);
        }else{
            update_post_meta($post_id, 'sidebar_position', '');
        }
    }

    public function display_meta_box($post) {
        $sidebar_position = get_post_meta($post->ID, 'sidebar_position', true);
        $left = '';
        $right = '';
        $none = '';
        switch ($sidebar_position) {
            case 'left':
                $left = 'checked="checked"';
                break;
            case 'right':
                $right = 'checked="checked"';
                break;
            case 'none':
                $none = 'checked="checked"';
                break;
            
            default:
                $left = '';
                $right = '';
                $none = '';
                break;
        }

        // Sidebar Settings
        // - Sidebar Enabled/Disabled
        echo '<p><strong>Sidebar Position</strong></p>
              <div class="inside">
              <div><input type="radio" id="sidebarPosition" name="sidebar_position" value="left" '. $left .'> Left</div>
              <div><input type="radio" id="sidebarPosition" name="sidebar_position" value="right" '. $right .'> Right</div>
              <div><input type="radio" id="sidebarPosition" name="sidebar_position" value="none" '. $none .'> None</div></div>';
    }

}
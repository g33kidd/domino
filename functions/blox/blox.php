<?php

class Blox_Metabox {

    var $id;
    var $title = "Custom Metabox";
    var $template;
    var $types;
    var $priority = "high";
    var $context = "normal";
    var $meta;
    var $fields;

    function Blox_Metabox($args) {
        $this->meta = array();
        $this->types = array('page', 'post');
        $this->fields = $args['fields'];
        $this->id = $args['id'];
        $this->title = $args['title'];
        $this->template = $args['template'];
        $this->context = $args['context'];
        $this->priority = $args['priority'];

        add_action('add_meta_boxes', array($this, '_init'));
    }

    function _init() {
        foreach($this->types as $type) {
            add_meta_box($this->id . '_metabox', 
                $this->title, array($this, '_setup'), 
                $type, $this->context, $this->priority);
        }

        add_action('save_post', array($this, '_save'));
    }

    function _setup() {
        global $post;
        $metabox =& $this;
        $id = $this->id;
        include $this->template;
    }

    function _save($post_id) {
        foreach($this->fields as $field) {
            if(isset($_POST[$field])) {
                update_post_meta($post_id, $this->id . '_' . $field, $_POST[$field])
            }else{
                delete_post_meta($post_id, $this->id);
            }
        }
    }


    /// WIP
    function get_the_value() {}
    function the_value() {}
    function is_selected($name, $value = NULL, $is_default = FALSE) {}
}
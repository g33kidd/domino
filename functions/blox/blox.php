<?php

class Blox_Metabox {

    var $id;
    var $title = "Custom Metabox";
    var $template;
    var $types;
    var $priority = "high";
    var $context = "normal";
    var $meta;

    function Blox_Metabox($args) {
        $this->meta = array();
        $this->types = array('page', 'post');
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
    }

    function _setup() {
        global $post;
        $metabox =& $this;
        $id = $this->id;
        include $this->template;
    }
}
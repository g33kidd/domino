<?php

// require get_template_directory() . '/functions/customizer/css-helper.php';

class Domino_Customizer {
    public $panels = array();
    public $sections = array();

    function __construct() {}

    public function add_panel($id, $title, $description) {
      global $wp_customize;
      $wp_customize->add_panel(get_id($id), array(
        'title' => $title,
        'description' => $description
      ));
    }

    public function add_section($title, $description, $panel=null) {}

    public function add_control($control, $setting) {}

    public function add_setting() {}

    public function get_setting($setting) {}

    public function get_id($id) {
      return 'domino_' . $id;
    }

    public function the_setting($setting) {
        echo get_setting($setting);
    }
}

new Domino_Customizer();

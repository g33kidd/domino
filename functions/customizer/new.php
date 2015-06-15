<?php 

require get_template_directory() . '/functions/customizer/css.php';

class Domino_Customizer {

    function __construct() {}

    public function add_panel($title, $description) {}

    public function add_section($title, $description, $panel=null) {}

    public function add_control($control, $setting) {}

    public function get_setting($setting) {}

    public function the_setting($setting) {
        echo get_value($setting);
    }

}
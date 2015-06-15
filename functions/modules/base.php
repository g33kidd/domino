<?php

class Domino_Modules {

  function __construct() {
    if(!is_admin()) {
      return;
    }
  }

  public function add_module($title, $fieldType, $fields, $template) {}

  public function load_modules($object_id) {}

  public function show_repeater_fields() {}

}

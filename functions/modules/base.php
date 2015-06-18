<?php

// if(!class_exists('Domino_Modules')):
class Domino_Modules {

  public $modules = array();
  public $prefix = "domino_";
  public $fieldTypes = ['text', 'wysiwyg'];

  protected static $instance = NULL;

  function __construct() {
    if(!is_admin())
      return;

    // $this->prefix = "domino_";
    // $this->fieldTypes = ['text', 'wysiwyg'];

    add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
  }

  public static function instance() {
      if(NULL === self::$instance)
        self::$instance = new self;
      return self::$instance;
  }

  /**
   * Adds metaboxes for all modules in this instance.
   * @method add_meta_boxes
   */
  public function add_meta_boxes() {
    if($this->has_modules()) {
      add_meta_box($this->prefix . 'metabox',
          "Modules", array($this, 'show'),
          'page', 'normal', 'high');
    }
  }

  /**
   * Handles display of modules inside metabox.
   * @method show
   * @param  array $module the module to be displayed
   */
  public function show() {
    echo '<table>';
    echo '<tbody>';
    foreach ($this->modules as $module) {
      ?>
      <tr>
        <td><?= $module['title']; ?></td>
        <td>
          <?
          foreach($module['fields'] as $field) {
            call_user_func(array($this, "show_{$field['type']}_field"), $module, $field);
          }
          ?>
        </td>
      </tr>
      <?
    }

    echo '</tbody>';
    echo '</table>';
  }

  /**
   * Creates a new module and stores it in $modules
   * @method add_module
   * @param  array     $args module parameters and settings
   */
  public function add_module($args) {
    if($this->is_valid_args($args)) {
      $this->modules[$this->get_module_id($args['name'])] = $args;
    }
  }

  public function show_text_field($module, $field) {
    echo '<label>'. $field['title'] .'</label><input type="text" name="text_field" value="">';
  }

  public function show_textarea_field($module, $field) {
    echo '<div class="form-field">
            <label>'. $field['title'] .'</label>
            <textarea name="textarea_field" rows="8" cols="40"></textarea>
          </div>';
  }

  public function show_wysiwyg_field($module, $field) {
    echo wp_editor('', 'wp_editor-module');
  }

  public function show_image_field($module, $field) {
    echo '<label>'. $field['title'] .'</label><input type="file" name="name" value="">';
  }

  /**
   * Gets the real module id
   * @method get_module_id
   * @param  string        $module_id
   * @return string
   */
  public function get_module_id($module_id) {
    return $this->prefix . $module_id;
  }

  public function get_module($module_id) {
    $id = $this->get_module_id($module_id);
    if(array_key_exists($module, $this->modules)) {
      return $this->modules[$id];
    }else{
      return false;
    }
  }

  public function get_module_setting($module_id, $option) {}

  /**
   * Determines if field type is supported.
   * @method is_valid_field_type
   * @param  string              $type field type
   * @return boolean
   */
  public function is_valid_field_type($type) {
    if(in_array($type, $this->fieldTypes)) {
      return true;
    }
    return false;
  }

  /**
   * Checks for required arguments in module params.
   * @method is_valid_args
   * @param  array        $args module arguments
   * @return boolean
   */
  public function is_valid_args($args) {
    if(is_array($args)) {
      return true;
    }else{
      return false;
    }
  }

  /**
   * Checks if there are any modules in the current instance.
   * @method has_modules
   * @return boolean
   */
  public function has_modules() {
    if(is_array($this->modules)) {
      return true;
    }else{
      return false;
    }
  }

  /**
   * Returns the $modules
   * @method get_modules
   * @return array    array of modules
   */
  public function get_modules() {
    return $this->modules;
  }

}

new Domino_Modules;

function add_module($atts) {
  Domino_Modules::instance()->add_module($atts);
}

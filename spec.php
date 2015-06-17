SCRATCH PAD
<?php

// Create a module
add_module(array(
  'title' => 'Some Display Name',
  'type' => 'repeater',
  'name' => 'module_id',
  'fields' => [array(
    'title' => "Field",
    'type' => 'text',
    'help' => "Some field helper text."
  )],
  'min' => '',    // Only used if type is 'repeater'
  'max' => '',    // Only used if type is 'repeater'
  'group' => '',  // Only used if you want to group certain modules together.
  'template' => '', // Location of the template for displaying the module on the front-end.
  'display' => ['page', 'post', 'template.php'], // Used to set specific page to display on
  'hide_editor' => true // Hides the default wordpress content editor if true.
));

// Removes a module that already exists... useful if the theme has
// some default modules that you no longer need in your theme.
remove_module(array(
  'id' => ''
));

// Display a single module inside a template with optional parameters.
display_module('module_name');
display_module('module_name', array(
  'before_content' => '<div class="module-class content-class some-classes">',
  'after_content' => '</div>'
));

// If page is a modular block page, meaning that most of the page is comprised of mostly modules
// this function displays all modules in the order defined by the user.
display_modules();

// Display modules based on the group the user has added the modules to.
display_module_group('module_group_name');

// Module loop for custom templates...
if(has_module('module_name')): while(has_module_rows('module_name')): the_module();
  // Gets a value from the module loop.
  $value = mod_value('field_name');
  // Echo a value from the module loop.
  the_mod_value('field_name');
endwhile; endif;

// Module get value from the module...
// This is for generic fields that are probably globally accessible
// to the theme such as Phone Numbers, Email Addresses, etc...
$value = mod_value('field_name');
the_mod_value('field_name');

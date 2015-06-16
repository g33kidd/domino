<?php

// $modules->fields = array(
//   'titleText' => 'text',
//   'contentEditor' => 'wysiwyg',
//   'imageUpload' => 'image'
// );

add_module(array(
  'title' => "Text Block Module",
  'name' => 'textblock',
  'type' => 'block',
  'fields' => [
    'headline' => ['title'=>'Headline', 'type'=>'text'],
    'content' => ['title'=>'Content', 'type'=>'wysiwyg']
  ]
));

add_module(array(
  'title' => "Carousel Module",
  'name' => 'carousel',
  'type' => 'repeater',
  'fields' => [
    'headline' => ['title'=>'Headline', 'type'=>'text'],
    'content' => ['title'=>'Content', 'type'=>'wysiwyg']
  ]
));

?>

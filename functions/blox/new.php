<?php

class Blox {

	var $id;
	var $title = "Blox Metabox";
	var $template;
	var $types;
	var $priority;
	var $meta;
	var $fields;

	// Initialization of Blox
	function Blox($args) {
		$this->meta = array();

		if(is_array($args)) {
			foreach($args as $k => $v) {
				$this->$k = $v;
			}
		}
	}

	public function init() {

	}

	public function display() {
		global $post;
		$blox =& $this;
		$id =& $this->id;
		include $this->template;
		echo '<input type="hidden" name="'. $this->id .'_nonce" value="' . wp_create_nonce($this->id) . '" />';
	}

	public function save_post() {}

	public function clean_fields() {}

}
<?php

if(!class_exists('Domino_Customizer')):
class Domino_Customizer {
	function __construct() {
		add_action('customize_register', [$this, 'load']);
	}

	function load() {}
	function add_setting() {}
}
endif;
<?php

if(!function_exists('domino_init')):
function domino_init() {
	if($config['enable_domino_customizer']) {
		$customizer = new Domino_Customizer();
	}
}
add_action('init', 'domino_init');
endif;
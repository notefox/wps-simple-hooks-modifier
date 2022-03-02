<?php
/**
 * The core plugin class.
 *
 */
require_once plugin_dir_path(dirname(__FILE__)) . 'classes/setup.php';

class wpsshm_Plugin extends wpsshm_Setup {
	public $config;
	
	public function __construct($config) {
		$this->config = $config;
		add_action('init', array(&$this, 'init'));
	}

	public function init() {
		
	}

}
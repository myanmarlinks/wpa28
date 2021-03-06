<?php 

	function _get_config($value) {
		$e_value = explode(".", $value);
		$file = DD . "/app/config/" . $e_value[0] . 
		".php";
		if(file_exists($file)) {
			$config_data = require $file;
			if(!array_key_exists($e_value[1], $config_data)) {	trigger_error("Config Key does not exist", E_USER_ERROR);
			}
		} else {
			trigger_error("Config file not found!", E_USER_ERROR);
		}
		return $config_data[$e_value[1]];

	} 

	function load_view($view, $data = null) {
		$file = DD . "/app/view/" . $view . ".php";
		if(file_exists($file)) {
			ob_start();
			if($data != null) {
				extract($data);
			}
			require $file;
			ob_end_flush();
		} else {
			trigger_error("You need to add view file in view folder", E_USER_ERROR);
		}
		
	}
 ?>
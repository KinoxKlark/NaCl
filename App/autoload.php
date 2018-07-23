<?php
	
	// Autoload
	
	function __autoload($class_name) {
		// var_dump(str_replace('\\', '/', $class_name) . '.php');
		require_once(str_replace('\\', '/', $class_name) . '.php');
	}
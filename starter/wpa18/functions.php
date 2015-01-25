<?php 

function _load_view($view) {

	$file = DD . "/app/view/" . $view . ".php";

	if(file_exists($file)) {
		require $file;
	} else {
		trigger_error("View file does not exists!", E_USER_ERROR);
	}
}

/**
*
* Connect to database
* @param $dbhost, $dbname, $dbuser, $dbpass
*
*/

function _db_connect() {

	// session_start(); 

	$dbhost = _config_get('database.dbhost');
	$dbname = _config_get('database.dbname');
	$dbuser = _config_get('database.username');
	$dbpass = _config_get('database.password');

	
	$link = mysql_connect(
		$dbhost, $dbuser, $dbpass);
	if (!$link) {
    	die('Could not connect: ' . mysql_error());
	}

	mysql_select_db($dbname) 
		or die("MySQL Error: " . mysql_error());

	return $link;
}

function _db_disconnect($link) {
	mysql_close($link);	
}

function _config_get($value) {
	$get_value = explode('.', $value);
	$file = DD . "/app/config/" . $get_value[0] . ".php";
	if(file_exists($file)) {
		$config_value = require $file;
	
		if(array_key_exists($get_value[1], $config_value)) {
			return $config_value[$get_value[1]];	
		} else {
			trigger_error("Array key does not exists in " . $file, E_USER_ERROR);
		}
		
	} else {
		trigger_error("File does not exists " . "config/" . $get_value[0] , E_USER_ERROR);
	}
}


function dump($value, $die = false) {
	var_dump($value);
	if($die == true) {
		die();
	}
}
?>
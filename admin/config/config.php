<?php
function __autoload($class){
	$filename="library/{$class}.php";
	if(file_exists($filename)){
		include_once $filename;
	}
}



$db = array(
	'host' => 'localhost',
	'user' => 'root',
	'pass' => '',
	'name' => 'foto',
);




$template = './template/showcatalog.php';
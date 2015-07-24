<?php
// Independent configuration
require  'lib/medoo.min.php';
 
$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'test',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '123',
 
	// optional
	'port' => 3306,
	'charset' => 'utf8',
	// driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
	'option' => [
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	]
]);
 
?>
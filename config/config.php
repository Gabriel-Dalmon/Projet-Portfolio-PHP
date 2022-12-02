<?php

session_start();

$GLOBALS['pdo'] = new PDO(
		'mysql:host=localhost;dbname=grpc6;',
		'root',
		'root',
		array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
	);
$GLOBALS['pdo']->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

?>
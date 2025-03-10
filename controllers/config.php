<?php

use ECLO\App;

$dbConfig = [
	// [required]
	'type' => 'mysql',
	'host' => 'localhost',
	'database' => 'eclo',
	'username' => 'root',
	'password' => '',
	// [optional]
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_general_ci',
	'port' => 3306,
	'prefix' => '',
	'logging' => true,
	'error' => PDO::ERRMODE_SILENT,
	'option' => [
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	],
	'command' => [
		'SET SQL_MODE=ANSI_QUOTES'
	]
];

$app = new App($dbConfig);

$app->setGlobalFile(__DIR__ . '/global.php');
$app->request("/home", './controllers/home.php');
$app->request("/about", './controllers/about.php');

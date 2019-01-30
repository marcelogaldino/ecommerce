<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Marcelo\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();
	
	$page->setTpl("index");

/*
	$sql = new 	Marcelo\DB\Sql();

	$results = $sql->select("SELECT * FROM tb_users");

	echo json_encode($results);
*/
//echo "OK";

});

$app->run();

?>
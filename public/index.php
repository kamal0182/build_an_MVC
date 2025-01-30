<?php
use app\Core\application;
// var_dump();
require_once __DIR__ ."/../vendor/autoload.php";
$app = new application(dirname(__DIR__));
$app->router->get('/','Home');
$app->router->get('/contact','Contact');
$app->run();
?>
<?php

// var_dump($_GET); die;
// var_dump($_POST); die;
// var_dump($_REQUEST); die;
$url = $_SERVER['REQUEST_URI'];

require __DIR__ . '/autoload.php';
$controller = new \App\Controllers\News();

$action =$_GET['action'] ?: 'Index';

$controller->action($action);
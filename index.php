<?php

// var_dump($_GET); die;
// var_dump($_POST); die;
// var_dump($_REQUEST); die;
$url = $_SERVER['REQUEST_URI'];

require __DIR__ . '/autoload.php';
$controller = new \App\Controllers\News();

$action =$_GET['action'] ?: 'Index';

try {
    $controller->action($action);
} catch (\App\Exceptions\Core $e) {
    echo 'Возникло исключение приложения: ' . $e->getMessage();
} catch (PDOException $e) {
    echo 'Что-то не так с базой';
}


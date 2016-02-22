<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 28.01.2016
 * Time: 10:36
 */

require __DIR__ . '/autoload.php';
/*
use App\Models\HasEmail;
use App\Models\User;


$user = new User();
$user->name = 'Vasya';
$user->email = 'v@pupkin.ru';
$user->insert();
*/


/*$user = new \App\Models\User();
$user->getEmail();
*/


/*
$view = new \App\View();
$view->title="Мой крутой сайт!";
*/
/*$view->desc = 'Сайт про новости';

$view->users = \App\Models\User::findAll();


echo count($view);
die;

echo $view->render(__DIR__ . '/App/templates/index.php');
*/

/*
$view->news = \App\Models\News::findAll();

$view->display(__DIR__ . '/App/templates/index.php');
*/

$controller = new \App\Controllers\News();
$controller->action('Index');
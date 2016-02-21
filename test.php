<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 29.01.2016
 * Time: 4:13
 */
require __DIR__ .'/autoload.php';

/*
$s = \App\Singleton::instance();
$s->counter = 1;
var_dump($s);

$s=\App\Singleton::instance();
var_dump($s);
*/

/*
$authors = \App\Models\Author::findAll();
var_dump($authors);
*/

$news = \App\Models\News::findAll();
/*
 var_dump($news);
*/
var_dump( $news[1]->author );
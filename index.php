<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 28.01.2016
 * Time: 10:36
 */

require __DIR__ . '/autoload.php';



$users = \App\Models\User::findAll();

var_dump($users[0]->getEmail());
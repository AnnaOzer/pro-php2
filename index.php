<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 28.01.2016
 * Time: 10:36
 */

require __DIR__ . '/autoload.php';

use App\Models\HasEmail;
use App\Models\User;


$user = new User();
$user->name = 'Vasya';
$user->email = 'v@pupkin.ru';
$user->insert();
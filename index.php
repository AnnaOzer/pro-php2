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


$users = User::findAll();

function sendEmail(HasEmail $user, $message)
{
      echo 'Почта уходит на ' . $user->email;
}


sendEmail($users[0], 'Hello!');
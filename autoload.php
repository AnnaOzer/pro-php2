<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 28.01.2016
 * Time: 10:42
 */

function __autoload($class)
{
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}
<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 28.01.2016
 * Time: 10:42
 */

function my_app_autoload($class)
{
    $filename = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($filename)) {
        include $filename;
    }


}

spl_autoload_register('my_app_autoload');

spl_autoload_register(function ($class) {
    include __DIR__ . '/' . str_replace(['\\','App'], ['/', 'lib'], $class) . '.php';
});

include __DIR__ . '/vendor/autoload.php';
<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 29.01.2016
 * Time: 4:13
 */

class First {
    public static $test = 1;
    public static function test()
    {
        echo static::$test;
    }
}

class Second extends First
{
    public static $test = 2;
}

Second::test();
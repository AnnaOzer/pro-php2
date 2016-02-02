<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 02.02.2016
 * Time: 15:39
 */

namespace App;


abstract class Singleton {

    public $counter;

    protected static $instance;

    protected function __construct()
    {}

    public static function instance()
    {
        if(null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }
} 
<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 29.01.2016
 * Time: 3:59
 */

namespace App;


use App\Models\HasEmail;

class Model
{

    const TABLE ='';

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }
} 
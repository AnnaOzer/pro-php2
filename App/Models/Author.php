<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 20.02.2016
 * Time: 20:36
 */

namespace App\Models;


use App\Model;

class Author
    extends Model
{
    const TABLE = 'authors2';

    public $name;
}

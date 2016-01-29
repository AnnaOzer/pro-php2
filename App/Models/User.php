<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 29.01.2016
 * Time: 0:33
 */

namespace App\Models;

use App\Db;
use App\Model;

class User extends Model {

    const TABLE = 'users';

    public $email;
    public $name;



} 
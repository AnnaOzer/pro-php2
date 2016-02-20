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

/**
 * Class User
 * @package App\Models
 *
 * @property int $age
 */
class User extends Model
implements HasEmail
{

    const TABLE = 'users';

    public $email;
    public $name;

    /**
     * Метод, возвращающий адрес e-mail
     * @deprecated
     * @return string Адрес электронной почты
     */
    public function getEmail() {

        return $this->email;

    }


} 
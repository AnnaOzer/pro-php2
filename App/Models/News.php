<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 21.02.2016
 * Time: 16:04
 */

namespace App\Models;


use App\Model;

class News
    extends Model
{
    const TABLE = 'news2';

    public $title;
    public $lead;
    public $author_id;
} 
<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 02.03.2016
 * Time: 15:28
 */

namespace App;


class MultiException
    extends \Exception
    implements \ArrayAccess, \Iterator
{
    use TCollection;
} 
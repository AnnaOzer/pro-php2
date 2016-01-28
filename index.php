<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 28.01.2016
 * Time: 10:36
 */

require __DIR__ . '/autoload.php';
$db = new \App\Db();

$res = $db->execute('CREATE TABLE foo(id SERIAL)');

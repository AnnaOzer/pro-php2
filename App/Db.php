<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 28.01.2016
 * Time: 11:07
 */

namespace App;


class Db {

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=pro-php2-test', 'root', '');
    }

    public function execute($sql){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

}
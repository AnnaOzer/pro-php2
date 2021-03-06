<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 28.01.2016
 * Time: 11:07
 */

namespace App;


class Db

{
    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        // try {
            $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=pro-php2-test11', 'root', '');
        // } catch (\PDOException $e) {
        //   throw new \App\Exceptions\Db($e->getMessage());
        // }
    }

    public function execute($sql, $params=[]){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }

    public function query($sql, $params, $class){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false!==$res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }


}
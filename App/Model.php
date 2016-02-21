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

    public $id;

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            [],
            static::class
        );
    }


    public static function findById($id)
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id=:id',
            [':id' => $id],
            static::class
        )[0];
    }


    public function isNew() {

        return empty($this->id);

    }

    public function insert()
    {
        if(!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k=> $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }
        var_dump($values);


        $sql = '
INSERT INTO ' . static::TABLE . '
(' . implode(',', $columns) . ')
VALUES
(' . implode(',', array_keys($values)) . ')

';
        $db = Db::instance();
        $db->execute($sql, $values);
    }
} 
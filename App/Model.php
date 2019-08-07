<?php

namespace App;

abstract class Model
{

    const TABLE = 'user';

    public static function findAll()
    {
        $db =  Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findById($id)
    {
        $db = Db::instance();
        return $db->query(
          'SELECT * FROM ' . static::TABLE .' WHERE id ='.$id,
          static::class
        );


    }

}
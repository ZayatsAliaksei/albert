<?php

namespace App;

abstract class Model
{

    const TABLE = 'users';

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM users ' . static::TABLE,
            static::class
        );
    }

}
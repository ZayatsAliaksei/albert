<?php

namespace App;

abstract class Model
{

    const TABLE = 'user';

    public $id;

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findById($id)
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id =' . $id,
            static::class
        );

    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function create()
    {
        if (!$this->isNew()) {
            return;
        }
        foreach ($this as $key => $value) {
            if ('id' == $key) {
                continue;
            }
            $columns[] = $key;
            $values[$key] = $value;
        }

        $sql = 'INSERT INTO '
            . static::TABLE . '(' . implode(',', $columns) . ')
             VALUES(' . implode("','", array_values($values)) . ')';

        var_dump($sql);
        die();
        $db = Db::instance();
        $db->execute($sql);

    }

}
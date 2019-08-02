<?php


namespace App\Models;


use App\Db;
use App\Model;

class News extends Model
{
    const TABLE = 'news';

    public $title;
    public $disc;

    public static function lastThree()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM news ORDER BY id DESC LIMIT 3',
            self::class
        );
    }
}
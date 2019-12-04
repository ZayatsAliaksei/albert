<?php


namespace App;


class StaticExample
{
    static public $aNum = 0;

    public static function sayHello()
    {
        self::$aNum++;
        print "Hello!(".self::$aNum.")\n";
    }

}
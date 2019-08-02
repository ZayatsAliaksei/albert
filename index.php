<?php

require __DIR__ . '/autoload.php';
include(__DIR__ . '/App/View/News.php');

$users = \App\Models\User:: findById(1);
$news = \App\Models\News::lastThree();

//var_dump($users);
//var_dump($news[0]);




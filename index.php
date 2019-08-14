<?php

require __DIR__ . '/autoload.php';
//include(__DIR__ . '/App/View/News.php');
//include(__DIR__ . '/App/View/Article.php');

$news = \App\Models\News::lastThree();
foreach ($news as $data) {
    echo $data->title . '<br>';
    echo $data->disc . '<br><br>';
    echo "<a href='App/View/Article.php?id={$data->id}'>Подробнее</a><p>";
}

$user = new \App\Models\User();
$user->name = 'user';
$user->email = 'u@u.com';
$user->create();

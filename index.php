<?php

use App\Db;

require __DIR__ . '/autoload.php';
//include(__DIR__ . '/App/View/News.php');
//include(__DIR__ . '/App/View/Article.php');

$news = \App\Models\News::lastThree();
foreach ($news as $data) {
    echo $data->title . '<br>';
    echo $data->disc . '<br><br>';
    echo "<a href='App/View/Article.php?id={$data->id}'>Подробнее</a><p>";
}

/*$news = new \App\Models\News();
$news->title = 'Важные новости';
$news->disc = 'не важные новости';
$news->create();*/






$product1 = new \App\CdProduct('сердце', 9.99, 'Santana', 'Carlos','2.58');
$product2 = new \App\BookProduct('Властелин Колец', 9.99, 'Толкин', 'Джон','1000');
$product3 = new \App\ShopProduct('Gotem','10.99','Bill','Galaher');
$class4 = new \App\ShopProductWriter();
$class4->addProduct($product3);

$pdo = new PDO('mysql:host=mysql;dbname=albert', 'root', 'root');
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
$obj = \App\ShopProduct::getInstance(1,$pdo);



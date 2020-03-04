<?php

use App\Db;

require __DIR__ . '/autoload.php';
include __DIR__ .'App/bank.php';
//include(__DIR__ . '/App/View/News.php');
//include(__DIR__ . '/App/View/Article.php');

/*$news = \App\Models\News::lastThree();
foreach ($news as $data) {
    echo $data->title . '<br>';
    echo $data->disc . '<br><br>';
    echo "<a href='App/View/Article.php?id={$data->id}'>Подробнее</a><p>";
}*/

/*$news = new \App\Models\News();
$news->title = 'Важные новости';
$news->disc = 'не важные новости';
$news->create();*/

$xml = simplexml_load_file('App/test.xml');

//var_dump($xml->product->name);

/*foreach ($xml->product as $item) {
    echo 'Название: '.$item->name.';';
    echo '  Категория: '.$item->category.';';
    echo '  Цена:'.$item['cost'].';';
    echo '  Количество:'.$item['amount']. '<br>';

}*/
echo $date = $_REQUEST['date'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <form action="" method="post">
        <p><input type="date" name="date"></p>
        <p><input type="button" value="Oтправить"></p>
    </form>
</body>
</html>

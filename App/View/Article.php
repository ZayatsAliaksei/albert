<?php
include __DIR__ .'/../../autoload.php';

if (isset($_GET["id"])) {
    $news = \App\Models\News::findById($_GET["id"]);
    foreach ($news as $data) {
        echo $data->title . '<br>';
        echo $data->disc . '<br><br>';
    }
}



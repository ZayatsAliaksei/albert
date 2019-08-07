<?php
$news = \App\Models\News::lastThree();
foreach ($news as $data) {
    echo $data->title . '<br>';
    echo $data->disc . '<br><br>';
   echo "<p><a href='Article.php?id={$data->id} '>Подробнее</a></p>";
   header();

}


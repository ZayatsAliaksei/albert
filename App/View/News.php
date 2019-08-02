<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
    <?php
    $news = \App\Models\News::lastThree();
    foreach ($news as $data) {
        foreach ($data as $article){
            echo($article) . '<br>';
        }
    }
    ?>
</body>
</html>
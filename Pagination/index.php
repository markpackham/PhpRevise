<?php

$db = new PDO('mysql:dbname=articles;host=127.0.0.1', 'root', '');

//User input (in url)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
//Don't let users try to tamper with the url and end up with more than 50 pages
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 5;

//Positioning/Limit
//If page is 1 we just start at 0
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

//Query to nab results form database, start at 0 index and get a total of 5
$articles = $db->prepare("
SELECT id, title
FROM articles
LIMIT {$start},{$perPage}
");

$articles->execute();

$articles = $articles->fetchAll(PDO::FETCH_ASSOC);

//var_dump($articles);

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
</head>
<body>
<h1>Article Ids & Titles</h1>
<?php
foreach ($articles as $article):
    ?>
    <div class="article">
        <p>
            <?php echo $article['id'] . ': '; ?>
            <?php echo $article['title']; ?>
        </p>
    </div>
<?php endforeach; ?>
</body>
</html>

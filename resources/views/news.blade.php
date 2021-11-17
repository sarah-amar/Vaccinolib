<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Covid-19 - Actualités</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
    <link href="/css/news.css" rel="stylesheet">
</head>
<body>
<?php
$url = 'https://newsapi.org/v2/top-headlines?country=fr&q=covid&apiKey=b84f3b617dbb4a13b555972ce44fa0c1';
$response = file_get_contents($url);
$NewsData = json_decode($response);
?>

<div class="jumbotron">
    <h1>Actualités</h1>
    <a href="/"><button type="button" class="pull-right btn btn-outline-light" >Retour</button></a>
</div>


<div class="container-fluid">
    <?php
    foreach ($NewsData->articles as $News)
    {
    ?>
    <div class="row NewsGrid">
        <div class="col-md-3">
            <img src="<?php echo $News->urlToImage ?>" alt="News">
        </div>
        <div class="col-md-9">
            <h2><?php echo $News->title ?></h2>
            <h5><?php echo $News->description ?></h5>
            <p><?php echo $News->content ?></p>
            <h6><?php echo $News->author ?></h6>
            <h6>Publié le <?php echo $News->publishedAt ?></h6>
        </div>
    </div>

    <?php
    }
    ?>

</div>

</body>
</html>


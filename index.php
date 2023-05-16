<?php
require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista Film</h1>
    <ul>
        <?php foreach ($list_of_movies as $movie) {
        ?>
            <li><?php echo ($movie->printTitle()) ?>. Genere: <?php echo ($movie->printGenere()) ?>. Anno d'uscita: <?php echo ($movie->printYear()) ?></li>
        <?php } ?>
    </ul>
</body>

</html>
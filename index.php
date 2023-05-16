<?php
require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Bootstrap Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Lista Film</h1>
        <div class="row ">
            <?php foreach ($list_of_movies as $movie) {
            ?>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo ($movie->printTitle()) ?></h3>
                            <p class="card-text">
                            <h4>Genere</h4> <?php echo ($movie->printGenere()) ?>
                            </p>
                            <p class="card-text">
                                <?php echo ($movie->printYear()) ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
                </div>
        </div>
</body>

</html>
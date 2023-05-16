<?php
require_once __DIR__ . '/generes.php';
require_once __DIR__ . '/movie.php';
$vita_bella = new Movie('La vita è bella', new Generes(['Commedia', 'Dramma']), '1997');
$western = new Movie('Il buono, il brutto e il cattivo', ['Western'], '1966');
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
        <li><?php var_dump($vita_bella) ?></li>
    </ul>
</body>

</html>
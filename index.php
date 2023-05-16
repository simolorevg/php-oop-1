<?php
class Movie
{
    public $title;
    public $genere;
    function __construct($_title)
    {
        $this->title = $_title;
    }
}
$vita_bella = new Movie('La vita è bella', 'Commedia');
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
    <p>
        <?php ?>
    </p>
</body>

</html>
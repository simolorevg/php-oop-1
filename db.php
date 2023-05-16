<?php
require_once __DIR__ . '/models/movie.php';
$list_of_movies = [
    new Movie('La vita è bella', ['Commedia', 'Dramma'], '1997'),
    new Movie('2012', ['Fantascienza', 'Catastrofico'], '2009'),
    new Movie('Super Size Me', ['Documentario', 'Divulgazione'], '2003')
];

<?php

include_once "./models/movie.php";

$film_1 = new Movie('Matrix', 'english', 10, 'profit', 100);
$film_2 = new Movie('Wonka', 'english', 8, 'profit', 100);
$film_3 = new Movie('Blade Runner', 'english', 7, 'profit', 100);

$films = [$film_1, $film_2, $film_3];

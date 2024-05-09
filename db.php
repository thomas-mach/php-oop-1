<?php

include_once "./models/production.php";

$film_1 = new Production('Matrix', 'english', 10);
$film_2 = new Production('Wonka', 'english', 8);
$film_3 = new Production('Blade Runner', 'english', 7);

$films = [$film_1, $film_2, $film_3];

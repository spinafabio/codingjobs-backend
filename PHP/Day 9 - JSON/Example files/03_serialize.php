<?php

$movies = array(
    array(
        "title" => "Jurassic Park",
        "date" => 2018
    ),
    array(
        "title" => "Fight Club",
        "date" => 1998
    )
);

$json = json_encode($movies, JSON_PRETTY_PRINT);

echo '<pre>';
var_dump($json);
echo '</pre>';

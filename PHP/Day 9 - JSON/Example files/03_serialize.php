<?php

$movies = array(
    array(
        "Jurassic Park",
        2018
    ),
    array(
        "Fight Club",
        1998
    )
);

$json = json_encode($movies, JSON_PRETTY_PRINT);

echo '<pre>';
var_dump($json);
echo '</pre>';

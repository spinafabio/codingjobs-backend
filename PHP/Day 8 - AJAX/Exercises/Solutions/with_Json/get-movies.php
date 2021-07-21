
<?php

// GET ALL MOVIES : 
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');
$query = "SELECT * FROM movies";
$results = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

// RETURN MOVIES ARRAY
$moviesToJson = json_encode($movies, JSON_PRETTY_PRINT);
echo $moviesToJson;

/*
echo '<pre>';
var_dump($moviesToJson);
echo '</pre>';
*/
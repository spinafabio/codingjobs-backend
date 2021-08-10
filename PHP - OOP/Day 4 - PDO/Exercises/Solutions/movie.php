<?php
//DB CONNECTION
$dbCon = 'mysql:host=localhost;dbname=movie_db';
$pdo = new PDO($dbCon, 'root', '');

//EXECUTE QUERY
$result = $pdo->query('SELECT * 
FROM movies m
INNER JOIN directors d ON d.id = m.director_id
WHERE m.id');


$movies = $result->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($movies);
echo '</pre>';

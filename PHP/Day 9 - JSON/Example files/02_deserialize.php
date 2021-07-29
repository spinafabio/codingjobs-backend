<?php

// Step 1 : Get the content of the file
$fileContent = file_get_contents("movie.json");

// Step 2 : deserialize the file
//$movies = json_decode($fileContent);

// 3. I can manipulate the array/objects in PHP
echo $movies[0]->title;

foreach ($movies as $key => $movie) {
    echo $movie->title . '<br>';
    echo $movie->date . '<br>';
}
/*echo '<pre>';
var_dump($fileContent);
echo '</pre>';*/

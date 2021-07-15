<?php

/*
    Cleaning data.
*/

$id = $_GET['id'];

$query = 'SELECT * FROM movies WHERE id = ' . $id;

/*
use is_numeric() to check if its a string containing only numeric values

if (is_numeric($id))
    echo 'Its a number';
else
    echo 'Its not a number';
*/

// Cast the variable to int
$id = (int) $_GET['id'];

// If you get 0, it means its not a number
if ($id > 0) {
    // execute the query
}

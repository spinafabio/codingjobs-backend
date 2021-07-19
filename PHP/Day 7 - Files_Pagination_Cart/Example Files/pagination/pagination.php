<?php

/*
    PAGINATION +

    If I want to display 3 movies per page : 
        SELECT * FROM movies LIMIT 0, 3;
        SELECT * FROM movies LIMIT 3, 3;

    movies.php?page=2
*/

$page = $_GET['page'];

echo 'Im on page number : ' . $page;

// Page 1 : Start at 0
// Page 2 : Start at 3
// Page 3 : Start at 6
// Page x : (page-1)*3
$limit = ($page - 1) * 3;
$query = "SELECT * FROM movies LIMIT $limit, 3";

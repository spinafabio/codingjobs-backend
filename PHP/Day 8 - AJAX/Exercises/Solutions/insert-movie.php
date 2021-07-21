<?php

// Validations
if (empty($_POST['title']) || empty($_POST['date_of_release']) || empty($_POST['director_id']))
    echo '<p class="error">All fields are mandatory</p>';
else {
    $title = trim($_POST['title']);
    $releaseDate = $_POST['date_of_release'];
    $dirID = $_POST['director_id'];

    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

    $query = "INSERT INTO movies(title, date_of_release, director_id) VALUES('$title', '$releaseDate', '$dirID')";
    $result = mysqli_query($conn, $query);

    if ($result)
        echo '<p class="success">Movie successfully added</p>';
    else
        echo '<p class="error">Something went wrong with query</p>';
}

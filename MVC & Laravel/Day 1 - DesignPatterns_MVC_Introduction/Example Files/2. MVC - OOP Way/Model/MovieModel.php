<?php

class MovieModel
{

    // Get PDO Connection
    private function getPDO()
    {
        return new PDO('mysql:host=localhost;dbname=movie_db;charset=utf8', 'root', '');
    }

    // Get all the movies
    public function getMovies()
    {
        // Connect to the DB 
        $pdo = $this->getPDO();

        // Send the query to the DB
        $results = $pdo->query('SELECT * FROM movies');

        // Fetch as associative array
        $movies = $results->fetchAll(PDO::FETCH_ASSOC);

        // Close connection / release memory
        $pdo = null;

        return $movies;
    }

    public function getMovie($id)
    {
        $pdo = $this->getPDO();

        $prep = $pdo->prepare('SELECT * FROM movies WHERE id = ?');
        $prep->bindValue(1, $id);
        $prep->execute();

        $movie = $prep->fetch(PDO::FETCH_ASSOC);

        // Close connection / release memory
        $pdo = null;

        return $movie;
    }
}

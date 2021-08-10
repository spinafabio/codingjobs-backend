<?php

require_once 'flowers.php';

class FlowerManager
{

    public function findAll()
    {

        $dbCon = 'mysql:host=localhost;dbname=flowers_db';
        $pdo = new PDO($dbCon, 'root', '');
        $query = 'SELECT* FROM flowers';
        $result = $pdo->query($query);
        $flowers = $result->fetchAll(PDO::FETCH_CLASS);
        return $flowers;
    }
}

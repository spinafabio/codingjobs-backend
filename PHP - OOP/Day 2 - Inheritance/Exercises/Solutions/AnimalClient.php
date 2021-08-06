<?php

require_once 'animal.php';
require_once 'dog.php';
require_once 'cat.php';
require_once 'magical.php';
require_once 'human.php';
require_once 'mechanical.php';
require_once 'robot.php';


$Athena = new Dog('Grey', 'Female', 'Athena');
echo '<pre>';
var_dump($Athena);
echo '</pre>';

$Matador = new Cat('white', 'male', 'Matador');
echo '<pre>';
var_dump($Matador);
echo '</pre>';


$fabio = new Human('fabio', 'black', 'male');
echo $fabio->work();
echo '<br>';
echo $fabio->talk();


$bender = new Robot('bender', 'grey');
echo '<br>';
echo $bender->work();
echo '<br>';

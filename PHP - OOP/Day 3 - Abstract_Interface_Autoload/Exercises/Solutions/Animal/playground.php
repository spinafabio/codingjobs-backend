<?php

spl_autoload_register();


$garfield = new Cat('Ginger', 'Male', 'Garfield', 4);
$snoopy = new Dog('Black&White', 'Male', 'Snoopy', 4);
$tom = new Dog('Grey', 'Male', 'Tom', 4);
$jerry = new Cat('Black', 'Female', 'Jerry', 4);
$shake = new Cat('White', 'Male', 'Shake', 4);

$animals = array($garfield, $snoopy, $tom, $jerry, $shake);

for ($i = 0; $i < 10; $i++) {
    $random = array_rand($animals);
    $animals[$random]->makeSound() . '<br>';
}

echo '<br>';




/*
echo $garfield->makeSound();
echo '<br>';
echo $snoopy->makeSound();
echo '<br>';
*/

$simon = new Human('Simon', 'Brown', 'Male');
$robot = new Robot('z1239', 'Silver');
$bender = new Robot('h1235', 'Black');
$fabio = new Human('Fabio', 'Brown', 'Male');

$creatures = array($simon, $robot, $bender, $fabio);

for ($i = 0; $i < 10; $i++) {
    $random = array_rand($creatures);
    $creatures[$random]->work() . '<br>';
}

echo '<br>';

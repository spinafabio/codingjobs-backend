<?php

require_once 'character.php';
require_once 'equipment.php';

$humanType = new Character('humanType', 'human');
$elfType = new Character('elfType', 'elfo');
$orcType = new Character('orcType', 'orc');

var_dump($humanType);
var_dump($orcType);
echo '<br>';
echo '<br>';


echo $orcType->getwarcry();
echo '<br>';
echo $humanType->getwarcry();


$sword = new equipment("Death Sword", "Sword", 10, 0,);
$sword2 = new equipment("Fatal sword", "Sword", 10, 25,);
$shield = new equipment("Fatal sword", "Sword", 10, 25,);



echo '<br>';
echo $sword->getEquipment();
echo '<br>';

var_dump($humanType->addEquipment($sword));

echo $shield->__toString();

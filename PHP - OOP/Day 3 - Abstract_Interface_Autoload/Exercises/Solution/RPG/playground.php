<?php

require_once 'Equipment.php';
require_once 'Adventurer.php';
require_once 'Elf.php';

$legolas = new Elf('Legolas');
$legolas2 = new Elf('Legolasazeraz');
$sword1 = new Equipment("Sword", 10, 0, 0);
echo '<pre>';
var_dump($legolas);
echo '</pre>';
$legolas->add_equipment($sword1);

$legolas2->attack($legolas);

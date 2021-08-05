<?php

require_once 'exercise2.php';

$coffe = new CoffeeCup('ily', 40, 90);
echo $coffe->getQuantitaty() . ' ';
echo $coffe->getBrand() . ' ';
echo $coffe->getTemperature() . ' ';
echo $coffe->getVolume() . ' ';
echo '<br>';
echo $coffe->sip(20);
echo '<br>';
echo $coffe->refill();
echo '<br>';
echo $coffe->reheat(15);
echo '<br>';
echo $coffe->coolDown(20);

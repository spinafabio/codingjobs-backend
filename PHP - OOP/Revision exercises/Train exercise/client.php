<?php


require_once 'train.php';

$train = new Train(1, 20, 10);
$train->set_id(1);
$train->set_departure(18);
$train->set_arrive(20);
$train->set_delay(10);

/*
$train1 = new Train();
$train2 = new Train();
$train3 = new Train();
$train4 = new Train();
*/

$trains = array($train);

foreach ($trains as $train) {
    echo $train->getTime();
}

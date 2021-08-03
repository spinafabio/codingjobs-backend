<?php

/*** SOLUTION with FOREACH ***/

function sumArray($arr1, $arr2)
{
    // Initialize empty array : it will contain the sum of the two arrays
    $arr3 = array();

    // If arguments not valid, display message and stop script
    if (!is_array($arr1) or !is_array($arr2)) {
        echo 'Error. Arguments must be array!';
        return array();
    }

    // Loop through one array (because they have same length, it doesnt matter which array you are looping)
    foreach ($arr1 as $key => $value) {
        $arr3[$key] = $arr1[$key] + $arr2[$key];
        // Shorter way to write same thing : $arr3[] = $value + $arr2[$key];
    }

    // Return the final array
    return $arr3;
}

// Use of my function
$tab1 = array(9, 20, 10, 3, 25, 2, 4);
$tab2 = array(2, 5, 13, 3, 1, 11, 7);

$result = sumArray($tab1, $tab2);

// Just a var dump to check if it works (you can remove it when its done):
echo '<pre>';
var_dump($result);
echo '</pre>';

echo '<hr>';

/*** SOLUTION with FOR loop ***/

function sumArray2($arr1, $arr2)
{
    // Initialize empty array : it will contain the sum of the two arrays
    $arr3 = array();

    // If arguments not valid, display message and stop script
    if (!is_array($arr1) or !is_array($arr2)) {
        echo 'Error. Arguments must be array!';
        return array();
    }

    for ($i = 0; $i < count($arr1); $i++) {
        $arr3[$i] = $arr1[$i] + $arr2[$i];
        // Shorter way to write same thing : $arr3[] = $arr1[$i] + $arr2[$i];
    }
    foreach ($arr1 as $key => $value) {
        $arr3[$key] = $arr1[$key] + $arr2[$key];
        // Shorter way to write same thing : $arr3[] = $value + $arr2[$key];
    }

    // Return the final array
    return $arr3;
}

// Use of my function
$tab1 = array(9, 20, 10, 3, 25, 2, 4);
$tab2 = array(2, 5, 13, 3, 1, 11, 7);

$result = sumArray2($tab1, $tab2);

// Just a var dump to check if it works (you can remove it when its done):
echo '<pre>';
var_dump($result);
echo '</pre>';

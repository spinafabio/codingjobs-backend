<?php

$countries = array(
    "France" => ["capital" => "Paris", "population" => 65687541],
    "Italy" => ["capital" => "Rome", "population" => 9879055],
    "Luxembourg" => ["capital" => "Luxembourg", "population" => 300],
    "Belgium" => ["capital" => "Brussels", "population" => 9849849],
    "Denmark" => ["capital" => "Copenhagen", "population" => 8789797],
    "Finland" => ["capital" => "Helsinki", "population" => 2989897],
    "Slovakia" => ["capital" => "Bratislava", "population" => 3879879],
    "Slovenia" => ["capital" => "Ljubljana", "population" => 64988],
    "Germany" => ["capital" => "Berlin", "population" => 3965987],
    "Greece" => ["capital" => "Athens", "population" => 4897987],
    "Ireland" => ["capital" => "Dublin", "population" => 1987497],
    "Netherlands" => ["capital" => "Amsterdam", "population" => 6897987], "Portugal" => ["capital" => "Lisbon", "population" => 7997978],
    "Spain" => ["capital" => "Madrid", "population" => 13277854],
    "Sweden" => ["capital" => "Stockholm", "population" => 897982],
);

/*
    Solutions : 
    - Few differents versions of what was expected
*/

/**** SOLUTION 1 : Only display ****/

// Loop through the array to display info about EACH country
foreach ($countries as $country => $countryInfo) {
    // Get the capital
    $capital = $countryInfo['capital'];
    // Get the population
    $population = $countryInfo['population'];
    // Display the message
    echo "The capital of $country is $capital. Number of inhabitants : $population.<br>";
}

echo '<hr>';

/**** SOLUTION 2 : Ordered display ****/

// Sort array alphabetical order
ksort($countries);

foreach ($countries as $country => $countryInfo) {
    // Get the capital
    $capital = $countryInfo['capital'];
    // Get the population
    $population = $countryInfo['population'];
    // Display the message
    echo "The capital of $country is $capital. Number of inhabitants : $population.<br>";
}

echo '<hr>';

/**** SOLUTION 3 : Ordered display + Populous country ****/

// Sort array alphabetical order
ksort($countries);

// Initialize variables to get the more populous country
$maxPopulation = 0;
$populousCountry = '';

// Loop through the array to display info about EACH country
foreach ($countries as $country => $countryInfo) {
    // Get the capital
    $capital = $countryInfo['capital'];
    // Get the population
    $population = $countryInfo['population'];
    // Display the message
    echo "The capital of $country is $capital. Number of inhabitants : $population.<br>";

    // BONUS : Check if population is greater in this country
    if ($population > $maxPopulation) {
        $maxPopulation = $population;
        $populousCountry = $country;
    }
}

// Bonus :
echo 'MOST POPULOUS COUNTRY : ' . $populousCountry;

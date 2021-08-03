<?php

class CoffeeCup
{
    // Properties
    private $_quantity;
    private $_brand;
    private $_temperature;
    private $_volume;

    public function __construct($volume, $brand, $temp)
    {
        $this->_volume = $volume;
        $this->_quantity = $volume;
        $this->_brand = $brand;
        $this->_temperature = $temp;
    }

    // Getters
    public function getQuantity()
    {
        return $this->_quantity;
    }

    public function getBrand()
    {
        return $this->_brand;
    }

    public function getTemperature()
    {
        return $this->_temperature;
    }

    // Setters
    /*
    Part 5 : Delete the setters
    public function setQuantity($qty)
    {
        $this->_quantity = $qty;
    }

    public function setBrand($brand)
    {
        $this->_brand = $brand;
    }

    public function setTemperature($temp)
    {
        $this->_temperature = $temp;
    }*/

    // Sip some coffee
    public function sip($qtyIWantToDrink)
    {
        // Make sure there is enough coffee
        // If I want to drink more than I have, I drink what's left in my cup.
        if ($this->_quantity < $qtyIWantToDrink) {
            echo 'You sipped : ' . $this->_quantity . '<br>';
            echo 'No more coffee left<br>';
            $this->_quantity = 0;
        } else {
            $this->_quantity -= $qtyIWantToDrink;
            echo 'You sipped : ' . $qtyIWantToDrink . '<br>';
            echo 'Remain ' . $this->_quantity . ' cl of coffee';
        }
    }

    public function refill()
    {
        $this->_quantity = $this->_volume;
        echo 'Mug full again';
    }

    public function reheat($deg)
    {
        $this->_temperature += $deg;
        echo 'Coffee warmed up at ' . $this->_temperature . ' degree celcius<br>';
    }

    public function coolDown($deg)
    {
        $this->_temperature -= $deg;
        echo 'Coffee cooled down at ' . $this->_temperature . ' degree celcius<br>';
    }
}

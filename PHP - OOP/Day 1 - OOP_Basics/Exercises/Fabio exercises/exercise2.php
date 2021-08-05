<?php

class CoffeeCup
{
    private $_quantity;
    private $_brand;
    private $_temperature;
    private $_volume;


    public function __construct($b, $t, $v)
    {
        $this->_quantity = $v;
        $this->_brand = $b;
        $this->_temperature = $t;
        $this->_volume = $v;
    }

    public function getQuantitaty()
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

    public function getVolume()
    {
        return $this->_volume;
    }





    public function sip($cl)
    {
        //return 'Remain ' . $this->_quantity - $cl . ' cl of coffee';
        if ($this->_quantity < $cl)
            $this->_quantity = 0;
        else
            $this->_quantity -= $cl;
        return 'Remains : ' . $this->_quantity . ' cl.';
    }

    public function refill()
    {
        $this->_quantity = $this->_volume;
        return 'Mug full again ' . $this->_quantity;
    }

    // parte 5

    public function reheat($degr)
    {

        $this->_temperature += $degr;
        return 'Coffe have ' . $this->_temperature;
    }

    public function coolDown($cool)
    {
        $this->_temperature -= $cool;
        return 'Coffe have ' . $this->_temperature;
    }
}

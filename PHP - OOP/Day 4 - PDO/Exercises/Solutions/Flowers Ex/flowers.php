<?php

require_once 'flower_manager.php';

class Flower
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    //SET

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    //GET

    public function getName($name)
    {
        return $this->name = $name;
    }

    public function getPrice($price)
    {
        return $this->price = $price;
    }
}

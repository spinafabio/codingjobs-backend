<?php

class Animal
{
    protected $nbLegs;
    protected $color;
    protected $gender;
    protected $name;

    public function __construct($color, $gender, $name)
    {
        $this->nbLegs = 4;
        $this->color = $color;
        $this->gender = $gender;
        $this->name = $name;
    }
}

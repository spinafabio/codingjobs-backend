<?php

class Dog extends Animal
{
    public function __construct($color, $gender, $name)
    {
        parent::__construct($color, $gender, $name);
        $this->sound = 'Bau Bau!!';
    }
}

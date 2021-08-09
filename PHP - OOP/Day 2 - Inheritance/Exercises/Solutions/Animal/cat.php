<?php

class Cat extends Animal
{
    public function __construct($color, $gender, $name)
    {
        $this->color = $color;
        $this->gender = $gender;
        $this->name = $name;
        $this->sound = 'miao miao!';
    }
}

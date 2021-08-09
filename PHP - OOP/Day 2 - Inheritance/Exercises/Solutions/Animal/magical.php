<?php

class Magical
{
    protected $name;
    protected $haircolor;
    protected $gender;

    public function __construct($name, $haircolor, $gender)
    {
        $this->name = $name;
        $this->haircolor = $haircolor;
        $this->gender = $gender;
    }
}

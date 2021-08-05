<?php

class Equipment
{
    private $name;
    private $weapon;
    private $attack;
    private $defense;

    public function __construct($name, $weapon, $attack, $defense)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->attack = $attack;
        $this->defense = $defense;
    }

    public function getEquipment()
    {
        return $this->name;
    }

    public function __toString()
    {
        return 'Equipment information : <br> attack : ' . $this->attack . '<br> defense :' . $this->defense;
    }
}

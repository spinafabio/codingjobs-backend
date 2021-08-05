<?php

class Character
{
    private $name;
    private $health;
    private $att;
    private $def;
    private $warcry;
    private $type;
    private $equipment;


    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->health = 100;
        $this->att = 10;
        $this->def = 5;
        $this->warcry = 'Kamehamehaaaaaaa!!!!';
        $this->type = $type;
    }

    public function getwarcry()
    {
        if ($this->type == 'orc')
            return $this->warcry = 'wwouogrouroulou mlll !!';
        else
            return $this->warcry;
    }

    public function addEquipment($equipment)
    {
        return $this->equipment = $equipment;
    }
    public function remove_equipment()
    {
        $this->equipment = null;
    }

    public function display_equipment()
    {
        echo $this->equipment;
    }
}

<?php

class Adventurer
{
  protected $name;
  protected $hltPoints;
  protected $attPoints;
  protected $defPoints;
  protected $warCry;
  protected $equipments;
  protected $speed;

  public function __construct($name)
  {
    $this->name = $name;
    $this->hltPoints = 100;
    $this->attPoints = 10;
    $this->defPoints = 5;
    $this->speed = 2;
    $this->warCry = 'Attack';
    $this->equipments = array();
  }

  public function get_warcry()
  {
    return $this->warCry;
  }

  // Manage equipment
  public function add_equipment($equipment)
  {
    if (count($this->equipments) < 4) {
      $swords = 0;
      $shield = 0;

      foreach ($this->equipments as $equip) {
        if ($equip->get_type() === 'Sword')
          $swords++;

        if ($equip->get_type() === 'Shield')
          $shield++;
      }

      if ($equipment->get_type() === 'Sword' && $swords >= 2)
        return 'You already have 2 swords';

      if ($equipment->get_type() === 'Shield' && $shield >= 1)
        return 'You already have a shield';

      $this->equipments[] = $equipment;
      return 'Equiped';
    } else
      return 'You already have 4 items';
  }

  public function remove_equipment(Equipment $equipment)
  {
    foreach ($this->equipments as $key => $equip) {
      if ($equipment === $equip) {
        unset($this->equipments[$key]);
        return 'Item removed';
      }
    }

    return 'Item not found';
  }

  public function display_equipment()
  {
    foreach ($this->equipments as $equip) {
      echo $equip;
    }
  }
}

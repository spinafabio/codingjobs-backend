<?php

class Character
{
  private $name;
  private $hltPoints;
  private $attPoints;
  private $defPoints;
  private $warCry;
  private $race;
  private $equipments;

  public function __construct($race, $name)
  {
    $this->race = $race;
    $this->name = $name;
    $this->hltpoints = 100;
    $this->attpoints = 10;
    $this->defpoints = 5;
    $this->warCry = 'Attack';
    $this->equipments = array();

    if ($race == 'Orc')
      $this->warCry = 'wwouogrouroulou mlll !!';
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

<?php
class Pokemon {
  public $name; //string
  public $energyType; //string
  public $hitpoints; //int
  public $attacks = []; //array
  public $weakness; //object
  public $resistance; //object

  public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance) {
    $this->name = $name;
    $this->energyType = $energyType;
    $this->hitpoints = $hitpoints;
    $this->attacks = $attacks;
    $this->weakness = $weakness;
    $this->resistance = $resistance;
  }


  public function getDetails() {
    return json_encode($this);
  }

}
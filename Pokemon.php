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

  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
  }

  private function takeDamage($target, $damage) {
    $target->hitpoints -= $damage;
  }


  public function attack($move, $target) {
    if ($target->hitpoints <= 0) {
      echo $target->name . ' is dood! </br>';
    } else {
      if ($this->hitpoints <= 0) {
        echo $this->name . ' is dood! </br>';
      } else {
        $index = array_search($move, array_column($this->attacks, 'move'));
    $damage = $this->attacks[$index]->damage;
    if ($this->energyType === $target->weakness->type) {
      $dmg = $damage*$target->weakness->mulitplier;
      $this->takeDamage($target, $dmg);
    } elseif ($this->energyType === $target->resistance->type) {
      $dmg = $damage/$target->resistance->mulitplier;
      $this->takeDamage($target, $dmg);
    } else {
      $dmg = $damage;
      $this->takeDamage($target, $dmg);
    }
    echo "<strong>" . $this->name . "</strong> Attacked <strong>" . $target->name . "</strong> with: <strong>" . $move . "</strong> and did <strong>" . $dmg . "</strong> Damage!<br>";
    echo $target->name . ' New hp: ' . $target->hitpoints . "<br><br>";
  }
      }
}

}
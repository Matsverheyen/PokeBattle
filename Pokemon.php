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

  public function getWeakness() {
    return $this->weakness;
  }

  public function getResistance() {
    return $this->resistance;
  }

  public function getDetails() {
    return json_encode($this);
  }

  public function attack($move, $target) {
    echo $this->name . " Hp: " . $this->hitpoints . '<br>';
    echo $target->name . " Hp: " . $target->hitpoints . '<br><br>';
    $index = array_search($move, array_column($this->attacks, 'move'));
    $damage = $this->attacks[$index]->damage;
    $weakness = $target->getWeakness();
    $resistance = $target->getResistance();
    if ($this->energyType === $weakness->type) {
      $damage = $damage*$weakness->mulitplier;
      $target->hitpoints = $target->hitpoints - $damage;
    } elseif ($this->energyType === $resistance->type) {
      $damage = $damage/$resistance->mulitplier;
      $target->hitpoints = $target->hitpoints - $damage;
    } else {
      $target->hitpoints = $target->hitpoints - $damage;
    }
    echo "<strong>" . $this->name . "</strong> Attacked <strong>" . $target->name . "</strong> with: <strong>" . $move . "</strong> and did <strong>" . $damage . "</strong> Damage!<br>";
    echo $target->name . ' New hp: ' . $target->hitpoints . "<br><br>";
  }

}
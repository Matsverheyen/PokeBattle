<?php

include 'Pokemon.php';

$pikachu = new Pokemon('Pikachu', 'Lightning', 60, [(object)array('move' => 'Electric Ring','damage' => 50), (object)array('move' => 'Pika Punch','damage' => 20) ], (object)array('type' => 'Fire', 'mulitplier' => 1.5), (object)array('type' => 'Fighting', 'mulitplier' => 20));
$charmeleon = new Pokemon('Charmeleon', 'Fire', 60, [(object)array('move' => 'Head Butt','damage' => 10), (object)array('move' => 'Flare','damage' => 30) ], (object)array('type' => 'Water', 'mulitplier' => 2), (object)array('type' => 'Lightning', 'mulitplier' => 10));
$snorlax = new Pokemon('Snorlax', 'Normal', 200, [(Object)array('move' => 'Tackle','damage' => 10), (object)array('move' => 'Body slam','damage' => 40)], (object)array('type' => 'Dark', 'multiplier' => 2), (object)array('type' => 'fighting','mulitplier' => 2));
echo $pikachu->getDetails();
echo '<br><br>';
echo $charmeleon->getDetails();
echo '<br><br>';
echo $snorlax->getDetails();
echo '<br><br>';
echo $pikachu->name . '\'s HP: ' . $pikachu->hitpoints . '</br>';
echo $charmeleon->name . '\'s HP: ' . $charmeleon->hitpoints . '</br></br>';
echo $snorlax->name . '\'s HP: ' . $snorlax->hitpoints . '</br></br>';
$pikachu->attack('Pika Punch', $charmeleon);
$charmeleon->attack('Flare', $pikachu);
$pikachu->attack('Electric Ring', $charmeleon);
$charmeleon->attack('Head Butt', $pikachu);
$pikachu->attack('Electric Ring', $charmeleon);
$charmeleon->attack('Flare', $snorlax);
$snorlax->attack('Body slam', $charmeleon);
$charmeleon->attack('Head Butt', $snorlax);
$snorlax->attack('Body slam', $charmeleon);

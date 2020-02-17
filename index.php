<?php

include 'Pokemon.php';

$pikachu = new Pokemon('Pikachu', 'Lightning', 60, [(object)array('move' => 'Electric Ring','damage' => 50), (object)array('move' => 'Pika Punch','damage' => 20) ], (object)array('type' => 'Fire', 'mulitplier' => 1.5), (object)array('type' => 'Fighting', 'mulitplier' => 20));
$charmeleon = new Pokemon('Charmeleon', 'Fire', 60, [(object)array('move' => 'Head Butt','damage' => 10), (object)array('move' => 'Flare','damage' => 30) ], (object)array('type' => 'Water', 'mulitplier' => 2), (object)array('type' => 'Lightning', 'mulitplier' => 10));
echo $pikachu->getDetails();
echo '<br><br>';
echo $charmeleon->getDetails();
echo '<br><br>';
$pikachu->attack('Pika Punch', $charmeleon);
$charmeleon->attack('Flare', $pikachu);
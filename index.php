<?php

include 'Pokemon.php';

$pikachu = new Pokemon('Pikachu', 'Lightning', 60, [array('move' => 'Electric Ring','damage' => 50), array('move' => 'Pika Punch','damage' => 20) ], array('type' => 'Fire', 'mulitplier' => 1.5), array('type' => 'Fighting', 'mulitplier' => 20));
$charmeleon = new Pokemon('Charmeleon', 'Fire', 60, [array('move' => 'Head Butt','damage' => 10), array('move' => 'Flare','damage' => 30) ], array('type' => 'Water', 'mulitplier' => 2), array('type' => 'Lightning', 'mulitplier' => 10));
echo $pikachu->getDetails();
echo '<br><br>';
echo $charmeleon->getDetails();
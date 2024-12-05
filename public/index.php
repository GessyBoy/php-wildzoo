<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal('lion', 4);
$lion->setSize(70);
$lion->setCarnivorous(true);
$lion->setThreatenedLevel('VU');

$parrot = new Animal('parrot', 2);
$parrot->setSize(30);
$parrot->setCarnivorous(false);

$elephant = new Animal('elephant', 4);
$elephant->setSize(300);
$elephant->setCarnivorous(false);
$elephant->setThreatenedLevel('LC');

$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>
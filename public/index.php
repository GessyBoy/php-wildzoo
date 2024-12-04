<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$animal1 = new Animal();
$animal2 = new Animal();
$animal3 = new Animal();

$animals = [$animal1, $animal2, $animal3];

var_dump($animals);


/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>
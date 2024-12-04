<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal();
$lion->name = 'lion';
$lion->size = 50;
$lion->pawNumber = 4;
$lion->carnivorous = true;
$lion->threatenedLevel = 'VU';

$parrot = new Animal();
$parrot->name = 'parrot';
$parrot->size = 20;
$parrot->pawNumber = 2;
$parrot->threatenedLevel = 'LC';

$lioncub = new Animal();
$lioncub->name = 'lioncub';
$lioncub->size = 10;
$lioncub->pawNumber = 4;
$lioncub->carnivorous = true;
$lioncub->threatenedLevel = 'VU';


$animals = [$lion, $parrot, $lioncub];

echo 'Bonjour je suis un ' . $lion->name . ' et j\'ai ' . $lion->pawNumber . ' patte(s)';
/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>
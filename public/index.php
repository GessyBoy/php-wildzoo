<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Area.php';
require __DIR__ . '/../src/Animal.php';
require __DIR__ . '/../src/Mammal.php';
require __DIR__ . '/../src/Felid.php';
require __DIR__ . '/../src/Equid.php';
require __DIR__ . '/../src/Bird.php';
require __DIR__ . '/../src/Reptile.php';
require __DIR__ . '/../src/Crocodilian.php';
require __DIR__ . '/../src/Snake.php';
require __DIR__ . '/../src/Arthropode.php';
require __DIR__ . '/../src/Arachnide.php';
require __DIR__ . '/../src/Spider.php';
require __DIR__ . '/../src/Insect.php';

use App\Area;
use App\Animal;
use App\Mammal;
use App\Felid;
use App\Equid;
use App\Bird;
use App\Reptile;
use App\Crocodilian;
use App\Snake;
use App\Arthropode;
use App\Arachnide;
use App\Spider;
use App\Insect;

$elephant = new Mammal('Elephant');
$lion = new Felid('Lion');
$tiger = new Felid('Tiger');
$zebra = new Equid('Zebra');
$parrot = new Bird('Parrot');
$alligator = new Crocodilian('Alligator');
$python = new Snake('Python');
$scorpio = new Arachnide('Scorpio');
$tarantula = new Spider('Tarantula');
$bee = new Insect('Bee');

$animals = [$elephant, $lion, $tiger, $zebra, $parrot, $alligator, $python, $scorpio, $tarantula, $bee];


/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>
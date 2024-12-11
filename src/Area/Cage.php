<?php

namespace App\Area;

use App\Animal\Animal;

class Cage extends Area
{
    public function isValid(Animal $animal): bool
    {
        return $animal->isDangerous(); // Seuls les animaux dangereux sont acceptés
    }
}

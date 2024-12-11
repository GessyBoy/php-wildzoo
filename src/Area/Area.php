<?php

namespace App\Area;

use App\Animal\Animal;

abstract class Area
{
    protected string $name;
    protected array $animals = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    // Méthode abstraite isValid() à implémenter dans les classes filles
    abstract public function isValid(Animal $animal): bool;

    // Ajout de l'animal avec la validation
    public function addAnimal(Animal $animal): void
    {
        if (!$this->isValid($animal)) {
            throw new \Exception('Impossible d\'ajouter le ' . $animal->getName() . ' au ' . $this->getName());
        }

        $this->animals[] = $animal;
    }

    public function getAnimals(): array
    {
        return $this->animals;
    }
}
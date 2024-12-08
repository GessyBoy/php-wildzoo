<?php

namespace App;

class Reptile extends Animal
{
    public function __construct(string $name, int $pawNumber)
    {
        parent::__construct($name, $pawNumber);
    }
}
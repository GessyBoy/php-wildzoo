<?php

namespace App;

class Arthropode extends Animal
{
    public function __construct(string $name, int $pawNumber)
    {
        parent::__construct($name, $pawNumber);
    }
}

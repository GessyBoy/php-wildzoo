<?php

namespace App;

class Felid extends Mammal
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->carnivorous = true;
    }
}
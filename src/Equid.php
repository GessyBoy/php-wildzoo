<?php

namespace App;

final class Equid extends Mammal
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->carnivorous = false;
    }
}

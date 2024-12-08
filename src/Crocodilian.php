<?php

namespace App;

final class Crocodilian extends Reptile
{
    public function __construct(string $name)
    {
        parent::__construct($name, 4);
        $this->carnivorous = true;
    }
}

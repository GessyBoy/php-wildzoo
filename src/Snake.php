<?php

namespace App;

final class Snake extends Reptile
{
    public function __construct(string $name)
    {
        parent::__construct($name, 0);
        $this->carnivorous = true;
    }
}
<?php

namespace App;

class Bird extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct($name, 2);
    }

}
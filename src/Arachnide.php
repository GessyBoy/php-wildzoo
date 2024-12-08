<?php

namespace App;

class Arachnide extends Arthropode
{
    public function __construct(string $name)
    {
        parent::__construct($name, 8);
    
    }
}

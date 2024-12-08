<?php

namespace App;

class Insect extends Arthropode
{
    public function __construct(string $name)
    {
        parent::__construct($name, 6);
    }
}

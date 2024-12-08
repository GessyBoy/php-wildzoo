<?php

namespace App;

final class Spider extends Arachnide
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->carnivorous = true;
    }
}

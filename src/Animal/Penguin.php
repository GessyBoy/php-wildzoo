<?php

namespace App\Animal;

use App\Swimmable;

class Penguin extends Bird implements Swimmable
{
    public function swim(): string
    {
        return 'Je nage grâce à mes ailes et mes jambes adaptées à l\'eau';
    }
}

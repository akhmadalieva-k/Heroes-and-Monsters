<?php

namespace Characters\Heroes\Wizard;

use Characters\Heroes\Hero;

class Wizard3lv extends Wizard
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 25;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 3;
        $this->Attack = 20;
        $this->IsAlive = true;
        $this->Hit = 7;
        $this->Point = 0;
    }

    public function LevelUp(Hero $hero) : Hero 
    {
        return $hero;
    }
}
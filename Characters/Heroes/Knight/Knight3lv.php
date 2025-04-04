<?php

namespace Characters\Heroes\Knight;

use Characters\Heroes\Hero;

class Knight3lv extends Knight2lv
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 21;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 8;
        $this->Attack = 12;
        $this->IsAlive = true;
        $this->Hit = 7;
    }

    public function LevelUp(Hero $hero) : Hero {
        return $hero;
    }
}
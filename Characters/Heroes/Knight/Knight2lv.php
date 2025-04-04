<?php

namespace Characters\Heroes\Knight;

use Characters\Heroes\Hero;

class Knight2lv extends Knight1lv
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 20;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 8;
        $this->Attack = 12;
        $this->IsAlive = true;
        $this->Hit = 7;
    }

    public function LevelUp(Hero $hero) : Hero
    {
        if($this->Point >=1) {
            $Character = new Knight3lv($hero->Name);
            $Character->Point = $this->Point - 2;
            $Character->Bag = $this->Bag;
            echo "level up!\n";
            sleep(2);
            return $Character;
        }
        else {
            echo "not enought point to level up\n";
            sleep(2);
            return $hero;
        }
    }
}
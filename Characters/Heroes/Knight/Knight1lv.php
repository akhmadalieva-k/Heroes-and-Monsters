<?php

namespace Characters\Heroes\Knight;

use AddLog;
use Characters\Heroes\Knight\Knight;
use Characters\Heroes\Hero;
use Inventory;

class Knight1lv extends Knight
{
    use AddLog;
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 15;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 6;
        $this->Attack = 10;
        $this->IsAlive = true;
        $this->Hit = 7;
        $this->Point = 0;
        $this->Bag = new Inventory(5);
    }

    public function LevelUp(Hero $hero) : Hero
    {
        if($this->Point >=1) {
            $Character = new Knight2lv($hero->Name);
            $Character->Point = $this->Point - 1;
            $Character->Bag = $this->Bag;
            echo "level up!\n";
            self::AddLog($hero->Name . " get 2 level\n");
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
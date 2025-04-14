<?php

namespace Characters\Heroes\Wizard;

use AddLog;
use Characters\Heroes\Hero;

class Wizard2lv extends Wizard
{
    use AddLog;
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 20;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 2;
        $this->Attack = 17;
        $this->IsAlive = true;
        $this->Hit = 7;
        $this->Point = 0;
    }

    public function LevelUp(Hero $hero) : Hero
    {
        if($this->Point >=1) {
            $Character = new Wizard3lv($hero->Name);
            $Character->Point = $this->Point - 2;
            $Character->Bag = $this->Bag;
            echo "level up!\n";
            self::AddLog($hero->Name . " get 3 level\n");
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
<?php

class Wizard1lv extends Wizard
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 15;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 1;
        $this->Attack = 14;
        $this->IsAlive = true;
        $this->Hit = 7;
        $this->Point = 0;
        $this->Bag = new Inventory(5);
    }

    public function LevelUp(Hero $hero) : Hero
    {
        if($this->Point >=1) {
            $Character = new Wizard2lv($hero->Name);
            $Character->Point = $this->Point - 1;
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
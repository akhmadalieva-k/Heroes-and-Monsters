<?php

class Wizard2lv extends Wizard
{
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

    public function LevelUp($name)
    {
        if($this->Point >=1) {
            $Character = new Wizard3lv($name);
            $Character->Point = $this->Point - 1;
            echo "level up!\n";
            return $Character;
        }
        else {
            return "not enought point";
        }
    }
}
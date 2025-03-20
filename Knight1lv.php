<?php

class Knight1lv extends Knight
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 10;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 3;
        $this->Attack = 5;
        $this->IsAlive = true;
        $this->Hit = 7;
        $this->Point = 5;
    }

    public function LevelUp($name)
    {
        if($this->Point >=1) {
            $Character = new Knight2lv($name);
            $Character->Point = $this->Point - 1;
            echo "level up!\n";
            return $Character;
        }
        else {
            return "not enought point";
        }
    }

}
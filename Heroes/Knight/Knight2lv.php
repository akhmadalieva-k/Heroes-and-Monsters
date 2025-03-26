<?php

class Knight2lv extends Knight
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

    public function LevelUp($name)
    {
        if($this->Point >=1) {
            $Character = new Knight3lv($name);
            $Character->Point = $this->Point - 2;
            echo "level up!\n";
            return $Character;
        }
        else {
            return "not enought point";
        }
    }
}
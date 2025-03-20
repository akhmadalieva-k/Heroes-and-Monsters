<?php

class Troll2lv extends Troll
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 15;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 4;
        $this->Attack = 8;
        $this->IsAlive = true;
        $this->Hit = 8;
    }
}
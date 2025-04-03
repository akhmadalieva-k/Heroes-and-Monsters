<?php

class Troll2lv extends Troll
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 17;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 8;
        $this->Attack = 12;
        $this->IsAlive = true;
        $this->Hit = 6;
    }
}
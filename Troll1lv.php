<?php

class Troll1lv extends Troll
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 10;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 2;
        $this->Attack = 6;
        $this->IsAlive = true;
        $this->Hit = 7;
    }

}
<?php

namespace Characters\Monsters\Troll;

use Characters\Monsters\Troll\Troll;

class Troll1lv extends Troll
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 13;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 6;
        $this->Attack = 10;
        $this->IsAlive = true;
        $this->Hit = 7;
    }

}
<?php

namespace Characters\Monsters\Witch;

use Characters\Monsters\Witch\Witch;

class Witch1lv extends Witch
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 13;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 1;
        $this->Attack = 12;
        $this->IsAlive = true;
        $this->Hit = 9;
    }
}
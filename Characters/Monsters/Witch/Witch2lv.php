<?php

namespace Characters\Monsters\Witch;

use Characters\Monsters\Witch\Witch;

class Witch2lv extends Witch
{
    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 20;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 3;
        $this->Attack = 20;
        $this->IsAlive = true;
        $this->Hit = 6;
    }
}
<?php

namespace Characters\Heroes\Knight;

use Characters\Heroes\Knight\Knight;
use Inventory;
use ShowMessage;

class DarkKnight extends Knight
{
    use ShowMessage;

    public function __construct($name)
    {
        $this->Name = $name;
        $this->MaxHP = 15;
        $this->CurrentHP = $this->MaxHP;
        $this->Shield = 6;
        $this->Attack = 10;
        $this->IsAlive = true;
        $this->Hit = 7;
        $this->Point = 0;
        $this->Level = 1;
        $this->Bag = new Inventory(5);
    }

    public function LevelUp() : void
    {
        if($this->Point >=1) {
            $this->Level += 1;
            $this->MaxHP += 3;
            $this->CurrentHP = $this->MaxHP;
            $this->Shield += 1;
            $this->Attack += 2;
            $this->Point -= 1;
            $this->ShowMessage("level up! you got " . $this->Level . " level");
        }
        else {
            $this->ShowMessage("not enought point to level up");
        }
    }
}

<?php

namespace Items\Potions;

use Items\Potions\Potion;
use Characters\Heroes\Hero;
use ShowMessage;

class ProtectPotion extends Potion
{
    use ShowMessage;

    public int $Protect;

    public function __construct(string $name, int $protect)
    {
        $this->Name = $name;
        $this->Protect = $protect;
        $this->Size = 1;
    }

    public function UseItem(Hero $hero) {
        $hero->Shield += $this->Protect;
        $this->ShowMessage($hero->Name . " use " . $this->Name);
        $this->ShowMessage($hero->Name . "`s protection increased by " . $this->Protect . " points");
    }
}
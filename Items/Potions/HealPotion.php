<?php

namespace Items\Potions;

use Characters\Heroes\Hero;
use Items\Potions\Potion;
use ShowMessage;

class HealPotion extends Potion
{
    use ShowMessage;

    public int $Heal;

    public function __construct(string $name, int $heal)
    {
        $this->Name = $name;
        $this->Heal = $heal;
        $this->Size = 1;
    }

    public function UseItem(Hero $hero) {
        $HPbeforeHeal = $hero->CurrentHP;
        $hero->CurrentHP += $this->Heal;
        if($hero->CurrentHP > $hero->MaxHP) {
            $hero->CurrentHP = $hero->MaxHP;
        }
        $this->ShowMessage($hero->Name . " use " . $this->Name);
        $this->ShowMessage($hero->Name . " heal " . $hero->CurrentHP - $HPbeforeHeal . " point");
    }
}
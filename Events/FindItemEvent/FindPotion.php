<?php

namespace Events\FindItemEvent;

use Events\FindItemEvent\FindItem;
use Characters\Heroes\Hero;
use Items\Potions\HealPotion;
use Items\Potions\ProtectPotion;
use ShowMessage;

class FindPotion extends FindItem
{
    use ShowMessage;

    public function FindHealPotion(Hero $hero)
    {
        $this->ShowMessage($hero->Name . " found a heal potion");
        $healPotion = new HealPotion("heal potion", 10);
        $hero->Bag->AddItemToInventory($healPotion);
        // $hero->UseItem($healPotion);
    }

    public function FindProtectPotion(Hero $hero)
    {
        $this->ShowMessage($hero->Name . " found a protect potion");
        $protectPotion = new ProtectPotion("protect potion", 3);
        $hero->Bag->AddItemToInventory($protectPotion);
        // $hero->UseItem($protectPotion);
    }
}

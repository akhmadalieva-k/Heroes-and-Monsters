<?php

namespace Characters\Heroes;

use Characters\Character;
use Error;
use Inventory;
use Items\Item;
use Items\Potions\HealPotion;
use Items\Potions\ProtectPotion;
use ShowMessage;

abstract class Hero extends Character
{
    use ShowMessage;
    protected int $Score;
    public Inventory $Bag;

    abstract public function LevelUp();

    public function UseItem(Item $item) : void
    {
        foreach($this->Bag->Items as $key => $CurrentItem) {
            if ($CurrentItem == $item) {
                $item->UseItem($this);
                unset($this->Bag->Items[$key]);
            }
        }
    }
}
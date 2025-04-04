<?php

namespace Characters\Heroes;

use Characters\Character;
use Inventory;
use Items\Item;
use Items\Potions\HealPotion;
use Items\Potions\ProtectPotion;

abstract class Hero extends Character
{
    protected int $Score;
    public Inventory $Bag;

    abstract public function LevelUp(Hero $hero);

    public function UseItem(Item $item) : void
    {
        foreach($this->Bag->Items as $key => $CurrentItem) {
            if ($CurrentItem == $item) {
                switch ($item) {
                    case ($item instanceof HealPotion):
                        $this->UseHealPotion($item);
                        unset($this->Bag->Items[$key]);
                        break;
                    case ($item instanceof ProtectPotion):
                        $this->UseProtectPotion($item);
                        unset($this->Bag->Items[$key]);
                        break;   
                }
            }
        }
    }

    protected function UseHealPotion(HealPotion $potion) : void
    {
        $HP = $this->CurrentHP;
        $this->CurrentHP += $potion->Heal;
        if($this->CurrentHP > $this->MaxHP) {
            $this->CurrentHP = $this->MaxHP;
        }
        $healing = $this->CurrentHP - $HP;
        echo $this->Name . " heal " . $healing . " points\n";
    }

    protected function UseProtectPotion(ProtectPotion $potion) : void
    {
        $this->Shield += $potion->Protect;
        echo $this->Name . " protection increased by " . $potion->Protect . " points\n";
    }
}
<?php

class HealPotion extends Potion
{
    private int $Heal;

    public function __construct(string $name, int $heal)
    {
        $this->PotionName = $name;
        $this->Heal = $heal;
    }

    public function UsePotion(object $character) {
        $character->AddHP($this->Heal);
    }
}
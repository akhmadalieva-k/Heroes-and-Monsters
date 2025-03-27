<?php

class HealPotion extends Potion
{
    private int $Heal;

    public function __construct(string $name, int $heal)
    {
        $this->Name = $name;
        $this->Heal = $heal;
        $this->Size = 1;
    }

    public function UsePotion(Character $character) {
        $character->AddHP($this->Heal);
    }
}
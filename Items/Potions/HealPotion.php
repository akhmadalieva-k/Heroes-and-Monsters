<?php

class HealPotion extends Potion
{
    public int $Heal;

    public function __construct(string $name, int $heal)
    {
        $this->Name = $name;
        $this->Heal = $heal;
        $this->Size = 1;
    }
}
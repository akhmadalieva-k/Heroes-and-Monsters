<?php

class ProtectPotion extends Potion
{
    public int $Protect;

    public function __construct(string $name, int $protect)
    {
        $this->Name = $name;
        $this->Protect = $protect;
        $this->Size = 1;
    }
}
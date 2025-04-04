<?php

namespace Characters;

abstract class Character
{
    public string $Name;
    public int $MaxHP;
    public int $CurrentHP;
    public int $Shield;
    public int $Attack;
    public bool $IsAlive;
    public int $Hit;
    public int $Point = 0;

    public function AddHP(int $HPpoint) : void
    {
        $this->CurrentHP += $HPpoint;
        //$healing = $HPpoint;
        if($this->CurrentHP > $this->MaxHP) {
            $this->CurrentHP = $this->MaxHP;
        }
        echo $this->Name . " heal " . $HPpoint . " point\n";
    }

    public function AddHPAfterRest() : void
    {
        $this->CurrentHP = $this->MaxHP;
    }

    public function AddProtection(int $protection) : void
    {
        $this->Shield += $protection;
        echo "protection increased by " . $protection . "\n";
    }

    // public function LevelUp($name){}
}
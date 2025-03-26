<?php

include("Heroes/Heroes.php");
include("Heroes/Hero.php");
include("Monsters/Monster.php");

abstract class Character
{
    public string $Name;
    protected int $MaxHP;
    protected int $CurrentHP;
    protected int $Shield;
    protected int $Attack;
    public bool $IsAlive;
    protected int $Hit;
    protected int $Point = 0;

    public function Attack($enemy) : Void
    {
        if($this->IsAlive) {
            $hit = rand(1,10);
            if ($this->Hit < $hit) {
                echo $this->Name . " hit miss\n";
            }
            else {
            $attack = $this->Attack - $enemy->Shield;
            $enemy->CurrentHP = $enemy->CurrentHP - $attack;
            echo $this->Name . " dealt " . $attack . " damage to " . $enemy->Name . "\n";
            if($enemy->CurrentHP <=0) {
                $enemy->IsAlive = false;
                $this->Point += 1;
                echo $this->Name . " win!\n";
            }
        }
        }
        else {
            "character dead\n";
        }
    }

    public function AddHP(int $HPpoint) {
        $this->CurrentHP += $HPpoint;
        //$healing = $HPpoint;
        if($this->CurrentHP > $this->MaxHP) {
            $this->CurrentHP = $this->MaxHP;
        }
        echo $this->Name . " heal " . $HPpoint . " point\n";
    }

    public function LevelUp($name){}
}
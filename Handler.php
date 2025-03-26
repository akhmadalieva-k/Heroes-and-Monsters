<?php

include("Character.php");
include("Adventure.php");
include("Items/Item.php");
include("EnemyGenerator.php");
include("Fight.php");

class Handler
{
    public function StartForestWay(Heroes $hero, string $name)
    {
        $adventure = new Adventure;
        switch($hero) {
            case Heroes::Knight:
                $character = new Knight1lv($name);
                $adventure->ForestWay($character);
                break;
            case Heroes::Wizard:
                $character = new Wizard1lv($name);
                $adventure->ForestWay($character);
                break;
        }
    }
}
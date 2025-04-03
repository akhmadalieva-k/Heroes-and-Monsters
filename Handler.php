<?php

include("Characters/Character.php");
include("Adventure.php");
include("Items/Item.php");
include("Fight.php");
include("Camp.php");
include("Inventory.php");

class Handler
{
    static public function StartForestWay(Heroes $hero, string $name) : void
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
<?php

use Characters\Heroes\Heroes;
use Characters\Heroes\Knight\Knight1lv;
use Characters\Heroes\Wizard\Wizard1lv;
use Events\Adventure;

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
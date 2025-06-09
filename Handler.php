<?php

//use Characters\Heroes\Knight\DarkKnight;
use Characters\Heroes\Heroes;
use Characters\Heroes\Knight\DarkKnight;
use Characters\Heroes\Wizard\DarkWizard;
use Events\Adventure\ForestAdventure;
use Events\Adventure\IAdventure;

class Handler
{
    use AddLog;
    
    static public function StartForestWay(Heroes $hero, string $name) : void
    {
        if (trim($name) === "") {
            throw new InvalidArgumentException("Имя не может быть пустым.");
        }
        $adventure = self::GetAdventure();
        switch($hero) {
            case Heroes::Knight:
                self::AddLog("new game. create Knight " . $name);
                $character = new DarkKnight($name);
                $adventure->StartAdventure($character);
                break;
            case Heroes::Wizard:
                self::AddLog("new game. create Wizard " . $name);
                $character = new DarkWizard($name);
                $adventure->StartAdventure($character);
                break;
        }
    }

    static private function GetAdventure() : IAdventure
    {
        return new ForestAdventure();
    }
}


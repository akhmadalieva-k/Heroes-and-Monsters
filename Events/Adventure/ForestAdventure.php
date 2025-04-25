<?php

namespace Events\Adventure;

use Characters\Heroes\Hero;
use Events\Adventure\Adventure;
use Events\RandEvent;
use Events\FightEvent\FightOneMonster;
use Events\Adventure\IAdventure;
use ShowMessage;

class ForestAdventure extends Adventure implements IAdventure
{
    use ShowMessage;

    public function StartAdventure(Hero $hero) : void
    {
        $event = new RandEvent();
        $fight = new FightOneMonster;
        $this->ShowMessage($hero->Name . " start adventure");
        $fight->Fight($hero);
        $hero->LevelUp();

        $this->ShowMessage($hero->Name . " continues his way");
        $event->GetRandEvent($hero);
        $this->ShowMessage($hero->Name . " continues his way");
        $fight->Fight($hero);
        $hero->LevelUp();

        $this->ShowMessage($hero->Name . " continues his way");
        $event->GetRandEvent($hero);
        $this->ShowMessage($hero->Name . " continues his way");
        $event->GetRandEvent($hero);
        $this->ShowMessage($hero->Name . " successfully completed his adventure!\n");
    }
}
<?php

namespace Events;

use Characters\Heroes\Hero;
use Events\RandEvent;
use Events\FightEvent\FightOneMonster;
use ShowMessage;

class Adventure
{
    use ShowMessage;

    public function ForestWay(Hero $hero) : void
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
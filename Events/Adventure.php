<?php

namespace Events;

use AddLog;
use Characters\Heroes\Hero;
use Events\Event;

class Adventure
{
    use ShowMessage;

    public function ForestWay(Hero $hero) : void
    {
        $this->StartMessage($hero);
        $event = new Event();
        $event->FightEvent($hero);
        $hero = $hero->LevelUp($hero);

        $this->ContinueMessage($hero);
        $event->RandEvent($hero);
        $this->ContinueMessage($hero);
        $event->FightEvent($hero);
        $hero = $hero->LevelUp($hero);

        $this->ContinueMessage($hero);
        $event->RandEvent($hero);
        $this->ContinueMessage($hero);
        $event->FightEvent($hero);
        $this->HappyEndMessage($hero);
    }
}
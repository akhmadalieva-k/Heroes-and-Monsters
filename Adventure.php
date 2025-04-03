<?php

include("Event.php");

class Adventure
{
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

    private function StartMessage(Hero $hero) : void
    {
        echo $hero->Name . " start adventure\n";
        sleep(2);
    }

    private function ContinueMessage(Hero $hero) : void
    {
        echo $hero->Name . " continues his way\n";
        sleep(2);
    }

    private function HappyEndMessage(Hero $hero) : void
    {
        echo $hero->Name . " successfully completed his adventure!\n";
    }
}
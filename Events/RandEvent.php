<?php

namespace Events;

use Characters\Heroes\Hero;
use Events\CampEvent;
use Events\Event;
use Events\FightEvent\FightOneMonster;
use Events\FindItemEvent\FindPotion;
use Error;

class RandEvent extends Event
{
    public function GetRandEvent(Hero $hero) : void
    {
        $rand = rand(1, 3);
        switch ($rand) {
            case 1:
                $event = new FightOneMonster;
                $event->Fight($hero);
                break;
            case 2:
                $event = new FindPotion;
                $event->FindHealPotion($hero);
                break;
            case 3:
                $event = new FindPotion;
                $event->FindProtectPotion($hero);
                break;
            default:
                throw new Error(" не удалось создать случайное событие");
        }
    }
}
<?php

namespace Events;

use AddLog;
use Characters\Heroes\Hero;

trait ShowMessage 
{
    use AddLog;
    public function StartMessage(Hero $hero) : void
    {
        echo $hero->Name . " start adventure\n";
        sleep(2);
    }

    public function ContinueMessage(Hero $hero) : void
    {
        echo $hero->Name . " continues his way\n";
        sleep(2);
    }

    public function HappyEndMessage(Hero $hero) : void
    {
        self::AddLog($hero->Name . " successfully completed his adventure\n");
        echo $hero->Name . " successfully completed his adventure!\n";
    }
}
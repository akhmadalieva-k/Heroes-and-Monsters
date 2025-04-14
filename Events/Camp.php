<?php

namespace Events;

use AddLog;
use Characters\Heroes\Hero;

class Camp
{
    use AddLog;
    public function SetUpCamp(Hero $hero) : void
    {
        self::AddLog($hero->Name . " get resting event\n");
        echo $hero->Name . " stopped for a rest\n";
        sleep(2);
        $hero->AddHPAfterRest();
        echo $hero->Name . " got full HP\n";
    }
}
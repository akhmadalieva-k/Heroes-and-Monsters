<?php

namespace Events;

use Characters\Heroes\Hero;

class Camp
{
    public function SetUpCamp(Hero $character) : void
    {
        echo $character->Name . " stopped for a rest\n";
        sleep(2);
        $character->AddHPAfterRest();
        echo $character->Name . " got full HP\n";
    }
}
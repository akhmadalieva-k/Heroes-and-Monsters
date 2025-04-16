<?php

namespace Events\CampEvents;

use AddLog;
use Events\CampEvents\Camp;
use Characters\Heroes\Hero;
use ShowMessage;

class CampEvent extends Camp
{
    use AddLog;
    use ShowMessage;

    public function SetUpCamp(Hero $hero) : void
    {
        self::AddLog($hero->Name . " get resting event\n");
        $this->ShowMessage($hero->Name . " stopped for a rest");
    }
}
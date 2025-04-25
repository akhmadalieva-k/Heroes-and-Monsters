<?php

namespace Events\Adventure;

use Characters\Heroes\Hero;

interface IAdventure
{
    public function StartAdventure(Hero $hero) : void;
}
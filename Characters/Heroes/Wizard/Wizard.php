<?php

namespace Characters\Heroes\Wizard;

use Characters\Heroes\Hero;
use Characters\Heroes\Heroes;

abstract class Wizard extends Hero
{
    protected Heroes $CharacterType = Heroes::Wizard;
    protected int $Level;
}
<?php

namespace Characters\Heroes\Knight;

use Characters\Heroes\Hero;
use Characters\Heroes\Heroes;

abstract class Knight extends Hero
{
    protected Heroes $CharacterType = Heroes::Knight;
    protected int $Level;
}
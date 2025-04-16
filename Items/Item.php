<?php

namespace Items;

use Characters\Heroes\Hero;

abstract class Item
{
    public string $Name;
    public int $Size;

    abstract public function UseItem(Hero $hero);
}
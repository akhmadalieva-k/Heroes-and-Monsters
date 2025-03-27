<?php

include("Knight/Knight.php");
include("Wizard/Wizard.php");

abstract class Hero extends Character
{
    protected int $Score;
    public Inventory $Bag;

    public function LevelUp($name){}
}
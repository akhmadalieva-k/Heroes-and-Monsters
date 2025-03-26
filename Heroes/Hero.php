<?php

include("Knight/Knight.php");
include("Wizard/Wizard.php");

abstract class Hero extends Character
{
    protected int $Score;

    public function LevelUp($name){}
}
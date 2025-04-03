<?php

include("Wizard1lv.php");
include("Wizard2lv.php");
include("Wizard3lv.php");

abstract class Wizard extends Hero
{
    protected Heroes $CharacterType = Heroes::Wizard;
}
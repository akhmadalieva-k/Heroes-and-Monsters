<?php

include("Knight1lv.php");
include("Knight2lv.php");
include("Knight3lv.php");

abstract class Knight extends Hero
{
    protected Heroes $CharacterType = Heroes::Knight;
}
<?php

include("Character.php");
include("Heroes.php");
include("Hero.php");
include("Monster.php");
include("Adventure.php");
include("Item.php");

$Arthur = new Knight1lv("Arthur");
$adv = new Adventure;
$adv->StartAdventure($Arthur);
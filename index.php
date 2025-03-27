<?php

include("Handler.php");

$adventure = new Handler();
$adventure->StartForestWay(Heroes::Knight, "Arthur");

// $heal = new HealPotion("HealPotion", 10);
// $shield = new ProtectPotion("Protect Potion", 5);
// print_r($heal);
// $bag = new Inventory(1);
// $bag->HealPotion = $heal;
// $bag->ProtectPotion = $shield;
// print_r($bag);

// $hero = new Wizard1lv("Magician");

// $hero->Bag->HealPotion = $heal;
// print_r($hero);
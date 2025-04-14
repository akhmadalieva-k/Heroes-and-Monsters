<?php

namespace Events;

use Characters\Heroes\Hero;
use Events\Camp;
use Events\Fight;
use Handler;
use Items\Potions\HealPotion;
use Items\Potions\ProtectPotion;

class Event
{
    public function RandEvent(Hero $hero) : void
    {
        $rand = rand(0, 3);
        switch ($rand) {
            case 0:
                $this->FightEvent($hero);
                break;
            case 1:
                $Camp = new Camp();
                $Camp->SetUpCamp($hero);
                sleep(2);

                break;
            case 2:
                Handler::AddLog($hero->Name . " get heal potion\n");
                echo $hero->Name . " found a heal potion\n";
                $healPotion = new HealPotion("heal potion", 10);
                sleep(2);
                $hero->Bag->AddItemToInventory($healPotion);
                sleep(2);
                if($hero->CurrentHP < $hero->MaxHP) {
                    sleep(2);
                    $hero->UseItem($healPotion);
                }
                break;
            case 3:
                Handler::AddLog($hero->Name . " get protect potion\n");
                echo $hero->Name . " found a protect potion\n";
                $protectPotion = new ProtectPotion("protect potion", 3);
                sleep(2);
                $hero->Bag->AddItemToInventory($protectPotion);
                sleep(2);
                echo $hero->Name . " use " . $protectPotion->Name . "\n";
                sleep(2);
                $hero->UseItem($protectPotion);
                sleep(2);
                break;
        }
    }

    public function FightEvent(Hero $hero) : void
    {
        Handler::AddLog($hero->Name . " start fight event\n");
        echo $hero->Name . " meet monster!\n";
        sleep(2);
        $Fight = new Fight();
        $fight = $Fight->Fight($hero);
        sleep(2);
        if (!$fight) {
            Handler::AddLog($hero->Name . " lost the fight. game over\n");
            echo "Game Over\n";
            exit;
        }
        else {
            Handler::AddLog($hero->Name . " won the fight\n");
        }
    }
}

<?php

namespace Events\FightEvent;

use Characters\Character;
use ShowMessage;

class Attack
{
    use ShowMessage;
    public function Attack(Character $attacker, Character $attacked) : void
    {
        if ($attacker->IsAlive) {
            $hit = rand(1, 10);
            if ($hit > $attacker->Hit) {
                $this->ShowMessage($attacker->Name . " hit miss");
            } else {
                $damage = $attacker->Attack - $attacked->Shield;
                if($damage < 0) {
                    $damage = 0;
                }
                $attacked->CurrentHP = $attacked->CurrentHP - $damage;
                $this->ShowMessage($attacker->Name . " dealt " . $damage . " damage to " . $attacked->Name);
                if ($attacked->CurrentHP <= 0) {
                    $attacked->IsAlive = false;
                    $attacker->Point += 1;
                    $this->ShowMessage($attacker->Name . " won the fight! " . $attacked->Name . " dead");
                }
            }
        }
    }
}

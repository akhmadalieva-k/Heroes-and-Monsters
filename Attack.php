<?php

class Attack
{
    public function Attack(Character $attacker, Character $attacked) : void
    {
        if ($attacker->IsAlive) {
            $hit = rand(1, 10);
            if ($hit > $attacker->Hit) {
                echo $attacker->Name . " hit miss\n";
            } else {
                $damage = $attacker->Attack - $attacked->Shield;
                if($damage < 0) {
                    $damage = 0;
                }
                $attacked->CurrentHP = $attacked->CurrentHP - $damage;
                echo $attacker->Name . " dealt " . $damage . " damage to " . $attacked->Name . "\n";
                if ($attacked->CurrentHP <= 0) {
                    $attacked->IsAlive = false;
                    $attacker->Point += 1;
                    echo $attacker->Name . " win!\n";
                }
            }
        }
    }
}

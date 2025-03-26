<?php

class Fight
{
    public function Fight(Hero $character, Monster $enemy) : bool
    {
        do {$character->Attack($enemy);
            sleep(1);
            $enemy->Attack($character);
            sleep(1);
        } while ($enemy->IsAlive == true && $character->IsAlive == true);
        if($character->IsAlive) {
            return true;
        }
        else {
            return false;
        }
    }
}
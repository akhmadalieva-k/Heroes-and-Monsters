<?php

namespace Events;

use Characters\Heroes\Hero;
use Events\EnemyGenerator;
use Events\Attack;

class Fight
{
    public function Fight(Hero $hero) : bool
    {
        $enemy = new EnemyGenerator();
        $monster = $enemy->GenerateOneEnemy();
        $attack = new Attack;
        do {$attack->Attack($hero, $monster);
            sleep(1);
            $attack->Attack($monster, $hero);
            sleep(1);
        } while ($monster->IsAlive == true && $hero->IsAlive == true);
        if($hero->IsAlive) {
            return true;
        }
        else {
            return false;
        }
    }
}
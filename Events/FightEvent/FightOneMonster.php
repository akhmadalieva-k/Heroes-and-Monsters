<?php

namespace Events\FightEvent;

use AddLog;
use Characters\Heroes\Hero;
use Events\FightEvent\EnemyGenerator;
use Events\FightEvent\Attack;
use Events\FightEvent\Fight;
use Handler;
use ShowMessage;

class FightOneMonster extends Fight
{
    use ShowMessage;
    use AddLog;

    public function Fight(Hero $hero) : void
    {
        $enemy = new EnemyGenerator();
        $monster = $enemy->GenerateOneEnemy();
        $this->ShowMessage($hero->Name . " meet monster " . $monster->Name);
        $this->ShowMessage("start fighting between " . $hero->Name . " and " . $monster->Name);
        $attack = new Attack;
        do {$attack->Attack($hero, $monster);
            $attack->Attack($monster, $hero);
        } while ($monster->IsAlive == true && $hero->IsAlive == true);
        if(!$hero->IsAlive) {
            $this->ShowMessage($hero->Name . " lost the fight. game Over");
            $this->AddLog("character dead. game over\n");
            exit;
        }
    }
}
<?php

namespace Events;

use AddLog;
use Characters\Monsters\Troll\Troll1lv;
use Characters\Monsters\Troll\Troll2lv;
use Characters\Monsters\Witch\Witch1lv;
use Characters\Monsters\Witch\Witch2lv;

class EnemyGenerator
{
    use AddLog;

    public array $Enemy = [];

    public function GenerateEnemies(int $countEnemy) : void
    {
        for ($i = 0; $i < $countEnemy; $i++) {
            $rand = rand(1, 4);
            switch ($rand) {
                case 1:
                    $this->Enemy[$i] = new Troll1lv("Troll");
                    break;
                case 2:
                    $this->Enemy[$i] = new Troll2lv("Big Troll");
                    break;
                case 3:
                    $this->Enemy[$i] = new Witch1lv("Witch");
                    break;
                case 4:
                    $this->Enemy[$i] =  new Witch2lv("Forest Witch");
                    break;
            }
        }
    }

    public function GenerateOneEnemy()  // : Monster не работает :(
    {
            $rand = rand(1, 4);
            switch ($rand) {
                case 1:
                    self::AddLog("create enemy Troll\n");
                    return new Troll1lv("Troll");
                    break;
                case 2:
                    self::AddLog("create enemy Big Troll\n");
                    return new Troll2lv("Big Troll");
                    break;
                case 3:
                    self::AddLog("create enemy Witch\n");
                    return new Witch1lv("Witch");
                    break;
                case 4:
                    self::AddLog("create enemy Forest Witch\n");
                    return  new Witch2lv("Forest Witch");
                    break;
            }
    }
}

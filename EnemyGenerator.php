<?php

class EnemyGenerator
{
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
                    return new Troll1lv("Troll");
                    break;
                case 2:
                    return new Troll2lv("Big Troll");
                    break;
                case 3:
                    return new Witch1lv("Witch");
                    break;
                case 4:
                    return  new Witch2lv("Forest Witch");
                    break;
            }
    }
}

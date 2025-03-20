<?php

class Adventure
{
    public function StartAdventure(Knight1lv $character) {
        echo $character->Name . " start adventure\n";
        sleep(2);
        echo $character->Name . " meet monster!\n";
        sleep(2);
        $fight = $this->FightTroll1lv($character);
        sleep(2);
        if(!$fight) {
            echo "Game Over\n";
        }
        else {
        $character = $character->LevelUp($character->Name);
        sleep(2);
        echo $character->Name . " continues his way\n";
        sleep(2);
        echo $character->Name . " meet monster!\n";
        sleep(2);
        $fight = $this->FightWitch1lv($character);
        sleep(2);
        if(!$fight) {
            echo "Game Over\n";
        }
        else {
            //sleep(2);
            echo $character->Name . " continues his way\n";
            sleep(2);
            echo $character->Name . " found a heal potion\n";
            $healPotion = new HealPotion("heal", 10);
            sleep(2);
            echo $character->Name . " use heal potion\n";
            sleep(2);
            $healPotion->UsePotion($character);
            sleep(2);
            echo $character->Name . " meet monster!\n";
            $fight = $this->FightTroll2lv($character);
            sleep(2);
            if(!$fight) {
                echo "Game Over\n";
            }
            else {
                $character = $character->LevelUp($character->Name);
                sleep(2);
                echo $character->Name . " continues his way\n";
                sleep(2);
                echo $character->Name . " meet monster!\n";
                $fight = $this->FightWitch2lv($character);
                sleep(2);
                if(!$fight) {
                    echo "Game Over\n";
                }
                else {
                    echo $character->Name . " successfully completed his adventure!\n";
                }
            }
        }
        }
    }

    public function FightTroll1lv($character) : bool
    {
        $troll = new Troll1lv("Troll");
        do {$character->Attack($troll);
            sleep(1);
            $troll->Attack($character);
            sleep(1);
        } while ($troll->IsAlive == true && $character->IsAlive == true);
        if($character->IsAlive) {
            return true;
        }
        else {
            return false;
        }
    }

    public function FightTroll2lv($character) : bool
    {
        $troll = new Troll2lv("Big Troll");
        do {$character->Attack($troll);
            sleep(1);
            $troll->Attack($character);
            sleep(1);
        } while ($troll->IsAlive == true && $character->IsAlive == true);
        if($character->IsAlive) {
            return true;
        }
        else {
            return false;
        }
    }

    public function FightWitch1lv($character) : bool
    {
        $witch = new Witch1lv("Witch");
        do {$character->Attack($witch);
            sleep(1);
            $witch->Attack($character);
            sleep(1);
        } while ($witch->IsAlive == true && $character->IsAlive == true);
        if($character->IsAlive) {
            return true;
        }
        else {
            return false;
        }
    }    

    public function FightWitch2lv($character) : bool
    {
        $witch = new Witch2lv("Witch");
        do {$character->Attack($witch);
            sleep(1);
            $witch->Attack($character);
            sleep(1);
        } while ($witch->IsAlive == true && $character->IsAlive == true);
        if($character->IsAlive) {
            return true;
        }
        else {
            return false;
        }
    }    
}
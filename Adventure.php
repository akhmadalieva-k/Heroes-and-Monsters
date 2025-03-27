<?php

//include ("EnemyGenerator.php");

class Adventure
{
    public function ForestWay(Hero $character) {
        echo $character->Name . " start adventure\n";
        sleep(2);
        echo $character->Name . " meet monster!\n";
        sleep(2);
        $Fight = new Fight();
        $GenerateEnemy = new EnemyGenerator();
        $firstEnemy = $GenerateEnemy->GenerateOneEnemy();
        $fight = $Fight->Fight($character, $firstEnemy);
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
        $secondEnemy = $GenerateEnemy->GenerateOneEnemy();
        $fight = $Fight->Fight($character, $secondEnemy);
        sleep(2);
        if(!$fight) {
            echo "Game Over\n";
        }
        else {
            $Camp = new Camp();
            $Camp->SetUpCamp($character);
            sleep(2);
            echo $character->Name . " continues his way\n";
            sleep(2);
            echo $character->Name . " found a heal potion\n";
            $healPotion = new HealPotion("heal potion", 10);
            sleep(2);
            $character->Bag->HealPotion = $healPotion;
            sleep(2);
            echo $character->Name . " meet monster!\n";
            sleep(2);
            $thirdEnemy = $GenerateEnemy->GenerateOneEnemy();
            $fight = $Fight->Fight($character, $thirdEnemy);
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
                $fourEnemy = $GenerateEnemy->GenerateOneEnemy();
                $fight = $Fight->Fight($character, $fourEnemy);
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
}
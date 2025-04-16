<?php

namespace Characters;

abstract class Character
{
    public string $Name;
    public int $MaxHP;
    public int $CurrentHP;
    public int $Shield;
    public int $Attack;
    public bool $IsAlive;
    public int $Hit;
    public int $Point = 0;
}
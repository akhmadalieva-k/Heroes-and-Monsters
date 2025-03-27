<?php

interface ISet
{
    public function __set(string $name, Item $value);
}
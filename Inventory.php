<?php

class Inventory
{
    protected int $BagSize;
    protected int $CurrentSize;
    public array $Items = [];

    public function __construct(int $bagSize)
    {
        $this->BagSize = $bagSize;
        $this->CurrentSize = $bagSize;
    }

    public function AddItemToInventory(Item $item) : void
    {
        if(count($this->Items) == $this->BagSize) {
            echo "full bag. unable to add item\n";
        }
        else {
            $this->Items[] = $item;
            echo $item->Name . " added to inventory\n";
        }
    }
}
<?php

use Items\Item;

class Inventory
{
    use ShowMessage;
    
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
            $this->ShowMessage("full bag. unable to add item");
        }
        else {
            $this->Items[] = $item;
            $this->ShowMessage($item->Name . " added to inventory");
        }
    }
}
<?php
include("Interfaces.php");

class Inventory implements ISet
{
    protected int $BagSize;
    protected int $CurrentSize;

    public function __construct(int $bagSize)
    {
        $this->BagSize = $bagSize;
        $this->CurrentSize = $bagSize;
    }

    public function __set(string $name, Item $value)
    {
        if($value->Size <= $this->CurrentSize) {
        $this->$name = $value;
        $this->CurrentSize -= $value->Size;
        echo $value->Name . " added to inventory\n";
        }
        else {
            echo "full bag, can`t add " . $value->Name . " to inventory\n";
        }
    }
}
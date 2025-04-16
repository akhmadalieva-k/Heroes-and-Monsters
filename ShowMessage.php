<?php

trait ShowMessage 
{
    use AddLog;
    
    public function ShowMessage(string $message) : void
    {
        echo $message . "\n";
        self::AddLog("Message: " . $message);
        sleep(2);
    }
}
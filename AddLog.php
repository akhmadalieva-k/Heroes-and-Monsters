<?php

trait AddLog
{
    static public function AddErrorLog($message) : void
    {
        $date = date('Y.m.d H:i:s');
        $log = $date . " " .  $message . "\n";
        file_put_contents("Log/Error.log", $log, FILE_APPEND);
    }

    static public function AddLog($message) : void
    {
        $date = date('Y.m.d H:i:s');
        $log = $date . " " .  $message . "\n";
        file_put_contents("Log/H_and_M.log", $log, FILE_APPEND);
    }
}
<?php
class DBLog extends Log
{
    private function writeToDb($message)
    {
        //insert to db
    }
    public function log($message)
    {
        $this->writeToDb($message);
        $res = "8 stash";
    }
}

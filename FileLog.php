<?php
require_once 'Log.php';
class FileLog extends Log
{
    private function writeToFile($message)
    {
        file_put_contents('error.log', date('Y/M/D h:i:s').': '.$message, FILE_APPEND);
    }
    public static function log($message)
    {
        parent::log($message);
        self::$logger->writeToFile($message);
    }
}
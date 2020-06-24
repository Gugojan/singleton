<?php
require_once 'Singleton.php';
class Log
{
    protected static $logger;
    use Singleton;
    protected function __construct()
    {

    }
    public static function log($message)
     {
         static::$logger = static::getInstance();
     }
}
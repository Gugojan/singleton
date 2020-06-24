<?php
trait Singleton
{
    static protected $instance = null;
    private function __construct()
    {
        //
    }
    public function __clone()
    {
        throw new Exception('Single ton cannot be cloned.');
    }
    public function __wakeup()
    {
        throw new Exception('Single ton cannot be unserialize.');
    }
    public static function getInstance()
    {
        //static is the current class such as Log
        return static::$instance ??  static::$instance = new static();
//        return static::$instance ? static::$instance :   static::$instance = new static();
    }
}
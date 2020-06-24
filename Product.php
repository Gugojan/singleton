<?php
class Product
{
    private $conn;
    private $price;
    private $prod_log;
    public function __construct(Log $log)
    {
        $this->prod_log = $log;
    }
    public function setPrice($price)
    {
        try {
            $this->conn = new \PDO("mysql:host=localhost;
            dbname=shop", 'root', 'root');
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //todo update to db
            $this->price = $price;
            return true;
        } catch(\PDOException $e) {
            $this->prod_log::log("Connection failed: " . $e->getMessage().'<br>');
            return false;
        }
    }
}
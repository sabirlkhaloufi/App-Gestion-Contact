<?php
class DbConnection{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'contactlist';
 
    public $connection;
 
    public function __construct(){
 
        if (!isset($this->connection)) {
 
            $this->connection = new pdo("mysql:host={$this->host};dbname={$this->database}",$this->username,$this->password);
 
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
 
        return $this->connection;
    }
}


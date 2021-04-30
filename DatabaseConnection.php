<?php

/* 
 * @author: hitechpanda
 * @description: ket noi database
 * @verson: perfect
 */

class DatabaseConnection{
    
    private $serverName = 'mysql:host=localhost';
    private $databaseName = 'dbname=hlearn';
    private $userName = 'root';
    private $passWord = '';  
    
    protected static $connectionInstance;
    
    protected $databaseConnection;
    
    public function __construct() {
        $this->connect_database();
    }
    private function connect_database() {
        
        try{
            $this->databaseConnection = new PDO($this->serverName.";".$this->databaseName,$this->userName,$this->passWord);
            $this->databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo $ex->getMessage();

        }
    }
    protected static function get_connection_instance() {
        if(!isset(self::$connectionInstance)){
            self::$connectionInstance = new DatabaseConnection();
        }
        return self::$connectionInstance;
    }
    
}
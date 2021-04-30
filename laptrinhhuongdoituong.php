<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo " day la bai hoc lap trinh huong doi tuong </br>";

class InformationDisplay{
    
    public $breakedLine = "</br>";
    
    public function break_line() {
        echo $this->breakedLine;
    }
    public function show_info($nameLabel,$nameVal) {
        
        echo $this->breakedLine." ".$nameLabel." - ".$nameVal;
        
    }
}


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

class MyPeople{
    
    public $id;
    public $ageNum;
    public $firstName;
    public $lastName;
    public $positionName;
    public $address;
    public $hobby;
    public $notice;
    public $careerName;
    
    
    
}


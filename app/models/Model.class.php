<?php

class Model{
    protected $dbconfig;
    
    public function __construct(){
        $this->dbconfig = require("app/config/dbconfig");
        $this->dbConnect();
    }
    public function dbConnect(){
        $conn = new PDO('mysql:host='.$this->dbconfig["dbhost"].';dbname='.$this->dbconfig["dbname"].';charset=utf8',$this->dbconfig["dbuser"],$this->dbconfig["dbpwd"]);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
    public function sendQuery($query){
        $sqlresult = $conn->query($query);
        return $sqlresult;
    }

}

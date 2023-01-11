<?php

class dbconfig{
    private $dbms = "mysql";
    private $host="localhost";
    private $dbname="gfkawzek_hct_biz";
    private $dbuser="gfkawzek_hctbizuser";
    private $dbpwd="hctbizuser!@#$";
    // private $dsn="$dbms:host=$host;dbname=$dbName";
    
    public function __construct(){
        // $conn = new PDO($dsn, $user, $pass);
        $conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->dbuser, $this->dbpwd);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
    // send query
    public function querySpilt($query){
        // $sqlresult = $conn->query("$query");
        // if($sqlresult){
        //     return "successfully";
        // }
        // else{
        //     return "failed";
        // }
    }
        // 執行 prepared statement
    // public function execute(){...}
        
    // 取得資料表的所有資料
    public function getAllData($table){
        // $sqlsend = 'select * from '.$table;

    }

    // 取得資料表的單一筆資料
    public function getSingleData($field,$keyword){

    }

    
}
$db = new dbconfig();
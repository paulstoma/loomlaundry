<?php

class Database{
    private $host = "localhost:3306";
    private $dbname = "LaundryLoom";
    private $username = "root";
    private $password = "root";
    public $con;

    public function create_connection(){
        $this->con=null;
        try{
            $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->con->exec("set names utf8");
            // echo "Connected t the database";

        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->con;
    } 
}

<?php

class Bags{
    private $conn;

    public $id;
    public $bluebags;
    public $greenbags;
    public $customer;
    public $requeststatus;
    public $requestdate;

    public function __construct($database){
        $this->conn = $database;
    }

    public function orderBags(){
        $query = "INSERT INTO L_BagsRequested (C_ID,L_BlueBags_Count,L_GreenBags_Count,Request_status, Request_Date) VALUE 
        (:customer,:bluebags,:greenbags,:requeststatus,:requestdate)";
        $statement = $this->conn->prepare($query);

        $this->customer=htmlspecialchars(strip_tags($this->customer));
        $this->bluebags=htmlspecialchars(strip_tags($this->bluebags));
        $this->greenbags=htmlspecialchars(strip_tags($this->greenbags));
        $this->requeststatus=htmlspecialchars(strip_tags($this->requeststatus));
        $this->requestdate=htmlspecialchars(strip_tags($this->requestdate));

        $statement->bindValue(":customer",$this->customer);
        $statement->bindValue(":bluebags",$this->bluebags);
        $statement->bindValue(":greenbags",$this->greenbags);
        $statement->bindValue(":requeststatus",$this->requeststatus);
        $statement->bindValue(":requestdate",$this->requestdate);

        if($statement->execute()){
            $this->id = $this->conn->lastInsertId();
            return True;
        }
        return False;
    }
}
<?php

class Billing{
    private $conn;

    public $customer;
    public $orderid;
    public $status;
    public $price;

    public function __construct($database){
        $this->conn=$database;
    }

    public function saveBilling(){
        $query = "INSERT INTO Billing (Order_ID,C_ID,Price,Billing_Status) VALUES 
        (:order,:customer,:price,:billingstatus)";

        $statement = $this->conn->prepare($query);
        $this->orderid=htmlspecialchars(strip_tags($this->orderid));
        $this->customer=htmlspecialchars(strip_tags($this->customer));
        $this->price=htmlspecialchars(strip_tags($this->price));
        $this->status=htmlspecialchars(strip_tags($this->status));

        $statement->bindValue(":order",$this->orderid);
        $statement->bindValue(":customer",$this->customer);
        $statement->bindValue(":price",$this->price);
        $statement->bindValue(":billingstatus",$this->status);

        if($statement->execute()){
            return True;
        }
        return False;
    }

    public function selectAll(){
        $query = "SELECT * FROM Billing WHERE C_ID = :customer";
        $statement = $this->conn->prepare($query);
        $statement->bindValue(":customer",$_SESSION['id']);

        $statement->execute();
        $result=$statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}
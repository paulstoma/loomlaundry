<?php

class Card{
    public $cardno;
    public $cardtype;
    public $cardname;
    public $cardcvc;
    public $cardvalidmonth;
    public $cardvalidyear;

    public function __construct($database){
        $this->conn=$database;
    }

    public function saveCard(){
        $query = "INSERT INTO CreditCards (CardNumber, CardName, CardType,CardCVC, CardValidMonth, CardValidYear, C_ID) 
        VALUES (:cardno,:cardname, :cardtype, :cardcvc, :cardvalidmonth, :cardvalidyear, :customer)";

        $statement = $this->conn->prepare($query);

        $statement->bindValue(":cardno",$this->cardno);
        $statement->bindValue(":cardname",$this->cardname);
        $statement->bindValue(":cardtype",$this->cardtype);
        $statement->bindValue(":cardcvc",$this->cardcvc);
        $statement->bindValue(":cardvalidmonth",$this->cardvalidmonth);
        $statement->bindValue(":cardvalidyear",$this->cardvalidyear);
        $statement->bindValue(":customer",$_SESSION['id']);
        
        if($statement->execute()){
            return True;
        }
        return False;
    }

    public function checkCard(){
        $query = "SELECT * FROM CreditCards WHERE C_ID = :customer";
        $statement = $this->conn->prepare($query);

        // $statement->bindValue(":customer",$_SESSION['id']);
        $statement->bindValue(":customer",$_SESSION['id']);
        $statement->execute();
        $result=$statement->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
}
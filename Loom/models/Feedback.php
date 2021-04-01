<?php

class Feedback{
    private $conn;

    public $id;
    public $customer;
    public $rating;
    public $message;

    public function __construct($database){
        $this->conn= $database;
    }

    public function submitFeedback(){
        $query = "INSERT INTO Feedback (C_ID,Feedback_rating,Feedback_Msg) VALUES (:customer,:rating,:messages)";

        $statement= $this->conn->prepare($query);

        $this->customer=htmlspecialchars(strip_tags($this->customer));
        $this->rating=htmlspecialchars(strip_tags($this->rating));
        $this->message=htmlspecialchars(strip_tags($this->message));

        $statement->bindValue(":customer",$this->customer);
        $statement->bindValue(":rating",$this->rating);
        $statement->bindValue(":messages",$this->message);

        if($statement->execute()){
            $this->id = $this->conn->lastInsertId();
            return True;
        }
        return False;
    }
}
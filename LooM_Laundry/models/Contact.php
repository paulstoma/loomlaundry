<?php

class Contact{
    private $conn;

    public $firstname;
    public $secondname;
    public $email;
    public $company;
    public $message;

    public function __construct($database){
        $this->conn=$database;
    }

    public function saveContactInfo(){
        $query = "INSERT INTO contactus (FName,LName, Email, CompanyName, Contact_Message, Create_Date, L_Response) VALUE (:firstname,:secondname,:email, :company,:message,:createdate,:response)";

        $statement = $this->conn->prepare($query);

        $this->firstname=htmlspecialchars(strip_tags($this->firstname));
        $this->secondname=htmlspecialchars(strip_tags($this->secondname));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->company=htmlspecialchars(strip_tags($this->company));
        $this->message=htmlspecialchars(strip_tags($this->message));

        $statement->bindValue(":firstname",$this->firstname);
        $statement->bindValue(":secondname",$this->secondname);
        $statement->bindValue(":email",$this->email);
        $statement->bindValue(":company",$this->company);
        $statement->bindValue(":message",$this->message);
        $statement->bindValue(":createdate", date("Y-m-d H:i:s"));
        $statement->bindValue(":response", 0);

        if($statement->execute()){
            return True;
            
        }
        return False;
        
    }
}
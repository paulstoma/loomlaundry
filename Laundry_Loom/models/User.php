<?php

Class User{
    private $conn;

    public $id;
    public $firstname;
    public $lastname;
    public $address;
    public $phonenumber;
    public $password;
    public $streetname;
    public $zipcode;
    public $city;
    public $state;

    public function __construct($database){
        $this->conn=$database;
    }

    public function customerLogin($email, $password){
        $query = "SELECT * FROM Customer WHERE C_Address='".$email."' AND C_password='".$password."'";
        $statement = $this->conn->prepare($query);
       
        $statement->execute();
        return $statement;
    }

    

    public function driverLogin($email, $password){
        $query = $query = "SELECT * FROM Driver WHERE D_Address='".$email."' AND D_password='".$password."'";
        $statement = $this->conn->prepare($query);

        $this->address = htmlspecialchars(strip_tags($email));
        $this->password = htmlspecialchars(strip_tags($password));

        $statement->bindValue(":address",$this->address);
        $statement->bindValue(":password", $this->password);

        $statement->execute();
        return $statement;
    }

    public function vendorLogin($email, $password){
        $query = $query = "SELECT * FROM Vendor WHERE V_Address='".$email."' AND V_password='".$password."'";
        $statement = $this->conn->prepare($query);

        $this->address = htmlspecialchars(strip_tags($email));
        $this->password = htmlspecialchars(strip_tags($password));

        $statement->bindValue(":address",$this->address);
        $statement->bindValue(":password", $this->password);

        $statement->execute();
        return $statement;
    }


    public function isRegistered(){
        $query = "SELECT * FROM Customer WHERE C_Address='".$this->address."'";
        $statement = $this->conn->prepare($query);
        $statement->execute();
        if($statement->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function registerCustomer(){
        if ($this->isRegistered()){
            echo("User already signed up");
            return False;
        }

        $query = "INSERT INTO Customer (C_FirstName,C_LastName,C_Address,C_Password,C_PhoneNumber,C_ZipCode,C_StreetName, C_City, C_State) VALUES 
        (:firstname,:lastname,:address,:password,:phonenumber,:zipcode,:streetname,:city,:state)";
        $statement = $this->conn->prepare($query);

        $this->firstname=htmlspecialchars(strip_tags($this->firstname));
        $this->lastname=htmlspecialchars(strip_tags($this->lastname));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->address=htmlspecialchars(strip_tags($this->address));
        $this->phonenumber=htmlspecialchars(strip_tags($this->phonenumber));
        $this->zipcode=htmlspecialchars(strip_tags($this->zipcode));
        $this->streetname=htmlspecialchars(strip_tags($this->streetname));
        $this->city=htmlspecialchars(strip_tags($this->city));
        $this->state=htmlspecialchars(strip_tags($this->state));


        $statement->bindValue(":firstname",$this->firstname);
        $statement->bindValue(":lastname",$this->lastname);
        $statement->bindValue(":password",$this->password);
        $statement->bindValue(":address",$this->address);
        $statement->bindValue(":phonenumber",$this->phonenumber);
        $statement->bindValue(":zipcode",$this->zipcode);
        $statement->bindValue(":streetname",$this->streetname);
        $statement->bindValue(":city",$this->city);
        $statement->bindValue(":state",$this->state);

        if($statement->execute()){
            $this->id = $this->conn->lastInsertId();
            return True;
            
        }

        return False;
    }

    public function selectUser($id){
        $query = "SELECT * FROM Customer WHERE C_ID = :id";
        $statement = $this->conn->prepare($query);

        $this->id=htmlspecialchars(strip_tags($id));
        $statement->bindValue(":id",$this->id);

        $statement->execute();
        
        $result=$statement->fetch(\PDO::FETCH_ASSOC);
        return $result;
    
    }

    public function selectVendor($id){
        $query = "SELECT * FROM Vendor WHERE V_ID = :id";
        $statement = $this->conn->prepare($query);

        $this->id=htmlspecialchars(strip_tags($id));
        $statement->bindValue(":id",$this->id);

        $statement->execute();
        
        $result=$statement->fetch(\PDO::FETCH_ASSOC);
        return $result;
    
    }

    public function updateProfile(){
        $query = "UPDATE Customer SET C_FirstName = :firstname,C_Address=:address, C_LastName= :lastname,C_Password=:password,C_PhoneNumber=:phonenumber";
        $statement = $this->conn->prepare($query);
        $this->firstname=htmlspecialchars(strip_tags($this->firstname));
        $this->lastname=htmlspecialchars(strip_tags($this->lastname));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->address=htmlspecialchars(strip_tags($this->address));
        $this->phonenumber=htmlspecialchars(strip_tags($this->phonenumber));

        $statement->bindValue(":firstname",$this->firstname);
        $statement->bindValue(":lastname",$this->lastname);
        $statement->bindValue(":password",$this->password);
        $statement->bindValue(":address",$this->address);
        $statement->bindValue(":phonenumber",$this->phonenumber);
        if($statement->execute()){
            return True;
            
        }

        return False;
    }

    public function updateVendor(){
        $query = "UPDATE Vendor SET V_Name = :firstname, V_Address=:address, V_Password=:password, V_PhoneNumber=:phonenumber";
        $statement = $this->conn->prepare($query);
        $this->firstname=htmlspecialchars(strip_tags($this->firstname));
        // $this->lastname=htmlspecialchars(strip_tags($this->lastname));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->address=htmlspecialchars(strip_tags($this->address));
        $this->phonenumber=htmlspecialchars(strip_tags($this->phonenumber));

        $statement->bindValue(":firstname",$this->firstname);
        // $statement->bindValue(":lastname",$this->lastname);
        $statement->bindValue(":password",$this->password);
        $statement->bindValue(":address",$this->address);
        $statement->bindValue(":phonenumber",$this->phonenumber);
        if($statement->execute()){
            return True;
            
        }

        return False;
    }
    
}

// .md5(
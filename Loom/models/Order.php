<?php

class Order{
    private $conn;
    
    public $id;
    public $customer;
    public $publicdriver;
    public $vendor;
    public $bluebag;
    public $greenbag;
    public $pickupstatus;
    public $specialinstructions;
    public $driverinstructions;
    public $pickupdate;
    public $pickuptime;
    public $driverid;
    public $driverstatus;
    public $orderstatus;

    public function __construct($database){
        $this->conn=$database;
    }

    public function createOrder(){
        $query="INSERT INTO Orders(C_ID, pickup_status,Bluebag_Count, Greenbag_Count, serviced_vendor, spl_instructions, driver_instructions, pickup_date, pickup_time, delivery_status, order_status) VALUES 
        (:C_id,:pickup_status,:bluebag,:greenbag,:serviced_vendor,:spl_instructions,:driver_instructions,:pickup_date,:pickup_time,:delivery_status,:order_status)";

        $statement = $this->conn->prepare($query);
        $this->customer=htmlspecialchars(strip_tags($this->customer));
        $this->pickupstatus=htmlspecialchars(strip_tags($this->pickupstatus));
        $this->bluebag=htmlspecialchars(strip_tags($this->bluebag));
        $this->greenbag=htmlspecialchars(strip_tags($this->greenbag));
        $this->vendor=htmlspecialchars(strip_tags($this->vendor));
        $this->specialinstructions=htmlspecialchars(strip_tags($this->specialinstructions));
        $this->driverinstructions=htmlspecialchars(strip_tags($this->driverinstructions));
        $this->pickupdate=htmlspecialchars(strip_tags($this->pickupdate));
        $this->pickuptime=htmlspecialchars(strip_tags($this->pickuptime));
        $this->driverstatus=htmlspecialchars(strip_tags($this->driverstatus));
        $this->orderstatus=htmlspecialchars(strip_tags($this->orderstatus));

        $statement->bindValue(":C_id",$this->customer);
        $statement->bindValue(":pickup_status",$this->pickupstatus);
        $statement->bindValue(":bluebag",$this->bluebag);
        $statement->bindValue(":greenbag",$this->greenbag);
        $statement->bindValue(":serviced_vendor",$this->vendor);
        $statement->bindValue(":spl_instructions",$this->specialinstructions);
        $statement->bindValue(":driver_instructions",$this->driverinstructions);
        $statement->bindValue(":pickup_date",$this->pickupdate);
        $statement->bindValue(":pickup_time",$this->pickuptime);
        $statement->bindValue(":delivery_status",$this->driverstatus);
        $statement->bindValue(":order_status",$this->orderstatus);

        if($statement->execute()){
            $this->id = $this->conn->lastInsertId();
            return True;
        }
        return False;
    }

    public function userOrders(){
        $query = "SELECT * FROM Orders join Vendor ON V_ID = Serviced_Vendor WHERE C_ID = :customer";
        $statement = $this->conn->prepare($query);
        $statement->bindValue(":customer",$_SESSION['id']);

        $statement->execute();
        $result=$statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getOrderInfo($id){
        $query = "SELECT * FROM Orders WHERE Order_ID = :id";
        $statement = $this->conn->prepare($query);
        $statement->bindValue(":id",$id);
        $statement->execute();
        $result=$statement->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function pendingCollection(){
        $query = "SELECT * FROM Orders JOIN Vendor on Orders.Serviced_Vendor = Vendor.V_ID  WHERE Delivery_Status ='Pending Collection'";
        $statement = $this->conn->prepare($query);

        $statement->execute();
        $result=$statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function markReceived(){
        // $query = "SELECT * FROM Orders JOIN Driver ON Driver.D_ID = Orders.PickUp_Driver WHERE Order_Status ='Pending Collection'";
        $query = "SELECT * FROM Orders WHERE Order_Status ='Pending Collection' OR Order_Status ='In Transit'";
        $statement = $this->conn->prepare($query);

        $statement->execute();
        $result=$statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function vendorOrders(){
        // $query = "SELECT * FROM Orders JOIN Driver ON Driver.D_ID = Orders.PickUp_Driver WHERE Order_Status ='Pending Collection'";
        $query = "SELECT * FROM Orders";
        $statement = $this->conn->prepare($query);

        $statement->execute();
        $result=$statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function markReady(){
        $query = "SELECT * FROM Orders WHERE Order_Status ='In Service'";
        $statement = $this->conn->prepare($query);

        $statement->execute();
        $result=$statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function vendorPickup(){
        $query = "SELECT * FROM Orders JOIN Vendor on Orders.Serviced_Vendor = Vendor.V_ID WHERE Order_Status ='Ready'";
        $statement = $this->conn->prepare($query);

        $statement->execute();
        $result=$statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function readyforPickup($order){
        $query = "UPDATE Orders SET Order_Status=:orderstatus WHERE Order_ID = :order";
        $statement = $this->conn->prepare($query);
        $statement->bindValue(":order",$order);
        $statement->bindValue(":orderstatus","Ready");
        
        if($statement->execute()){
            return True;
        }
        return False;
    }

    public function zipcodes(){
        $query = "SELECT zipcode FROM zipcodes";
        $statement = $this->conn->prepare($query);

        $statement->execute();
        $result=$statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function collectedVendor($order){
        $query = "UPDATE Orders SET Order_Status=:orderstatus WHERE Order_ID = :order";
        $statement = $this->conn->prepare($query);
        $statement->bindValue(":order",$order);
        $statement->bindValue(":orderstatus","Completed");
        
        if($statement->execute()){
            return True;
        }
        return False;
    }

    public function dropoffDate($order, $dropoff){
        $query = "UPDATE Orders SET Dropoff_Date = :dropoff WHERE Order_ID = :order";
        
        $statement = $this->conn->prepare($query);
        $statement->bindValue(":order",$order);
        $statement->bindValue(":dropoff", $dropoff);
        
        if($statement->execute()){
            return True;
        }
        return False;
    }

    public function deliveryReceived($order){
        $query = "UPDATE Orders SET Order_Status=:orderstatus WHERE Order_ID = :order";
        $statement = $this->conn->prepare($query);
        $statement->bindValue(":order",$order);
        $statement->bindValue(":orderstatus","In Service");
        
        if($statement->execute()){
            return True;
        }
        return False;
    }

    public function driverPickup($order,$driver){
        $query = "UPDATE Orders SET PickUp_Status = :pickupstatus, PickUp_Driver = :driver, Delivery_Status=:deliverystatus,Order_Status=:orderstatus WHERE Order_ID = :order";

        $statement = $this->conn->prepare($query);
        $statement->bindValue(":pickupstatus","Picked Up");
        $statement->bindValue(":driver",$driver);
        $statement->bindValue(":deliverystatus","Picked Up");
        $statement->bindValue(":orderstatus","In Transit");
        $statement->bindValue(":order",$order);
        // var_dump($order);

        if($statement->execute()){
            return True;
        }
        return False;
    }
    
}
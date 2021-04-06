<?php

include_once '../database/Database.php';
include_once '../models/User.php';

$database = new Database();
$db = $database->create_connection();
session_start();
$user=new User($db);
$user->passsword =$_POST['password'];
$user->address = $_POST['email'];

$customer = $user->customerLogin($user->address,$_POST['password']);
$driver = $user->driverLogin($user->address,$_POST['password']);
$vendor = $user->vendorLogin($user->address,$_POST['password']);

if ($customer->rowCount()>0){
    $row = $customer->fetch(PDO::FETCH_ASSOC);
    if(isset($_SESSION['login_error'])){
        unset($_SESSION["login_error"]);
    }
    // var_dump($row );
    $_SESSION['id'] = $row['C_ID'];
    $_SESSION['email'] = $row['C_Address'];
    $_SESSION['name'] = $row['C_FirstName'];
    $_SESSION['zip-code'] = $row["C_ZipCode"];
    $_SESSION['user_type'] = "customer";
    
    header("Location: ../customer/dashboard.php");
}
else if ($driver->rowCount()>0){
    $row = $driver->fetch(PDO::FETCH_ASSOC);
    if(isset($_SESSION['login_error'])){
        unset($_SESSION["login_error"]);
    }
    // var_dump($row );
    $_SESSION['id'] = $row['D_ID'];
    $_SESSION['email'] = $row['D_Address'];
    $_SESSION['name'] = $row['D_Name'];
    $_SESSION['user_type'] = "driver";
    $_SESSION['password'] = $row["D_Password"]; 
    $_SESSION['zip-code'] = $row["D_ZipCode"];
    
    header("Location: ../driver/dashboard.php");
    
}
else if ($vendor->rowCount()>0){
    $row = $vendor->fetch(PDO::FETCH_ASSOC);
    if(isset($_SESSION['login_error'])){
        unset($_SESSION["login_error"]);
    }
    // var_dump($row );
    $_SESSION['id'] = $row['V_ID'];
    $_SESSION['vendor_address'] = $row['V_Street'];
    $_SESSION['email'] = $row['V_Address'];
    $_SESSION['name'] = $row['V_Name'];
    $_SESSION['user_type'] = "vendor";
    $_SESSION['zip-code'] = $row["V_ZipCode"];
    
    header("Location: ../vendor/dashboard.php");
    
}
else{
    $_SESSION['login_error'] = "Invalid username or password";
    header("Location: ../index.php");
}
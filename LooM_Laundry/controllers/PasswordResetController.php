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

if ($user->password != $_POST["confirmpassword"]){
    $_SESSION['reset_error'] = "Passwords do not match";
    header("Location: ../resetpassword.php");
} 
else if ($customer->rowCount()>0){
    $row = $customer->fetch(PDO::FETCH_ASSOC);
    if(isset($_SESSION['reset_error'])){
        unset($_SESSION["reset_error"]);
    }

    if($user->customerResetPassword()){
        $_SESSION['reset_success'] = "Your password has been reset";
    
        header("Location: ../index.php");
    }
    
    
    header("Location: ../resetpassword.php");
}
else if ($driver->rowCount()>0){
    $row = $driver->fetch(PDO::FETCH_ASSOC);
    if(isset($_SESSION['reset_error'])){
        unset($_SESSION["reset_error"]);
    }
    
    if($user->driverResetPassword()){
        $_SESSION['reset_success'] = "Your password has been reset";
    
        header("Location: ../index.php");
    }
    
}
else if ($vendor->rowCount()>0){
    $row = $vendor->fetch(PDO::FETCH_ASSOC);
    if(isset($_SESSION['reset_error'])){
        unset($_SESSION["reset_error"]);
    }
    
    if($user->vendorResetPassword()){
        $_SESSION['reset_success'] = "Your password has been reset";
    
        header("Location: ../index.php");
    }
    
}
else{
    $_SESSION['reset_error'] = "Email does not exist";
    header("Location: ../resetpassword.php");
}
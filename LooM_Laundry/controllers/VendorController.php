<?php

include_once '../database/Database.php';
include_once '../models/User.php';

// Database connection
$database = new Database();
$db = $database->create_connection();

$user=new User($db);
$user->firstname =$_POST['vendorname'];
$user->license = $_POST['vendorlicense'];
$user->address = $_POST['email'];
$user->phonenumber = $_POST['phonenumber'];
$user->password = $_POST['password'];
$user->ssn = $_POST['ssn-vendor'];
$user->zipcode = $_POST['zipcode'];
// $user->city = $_POST['city'];
// $user->state = $_POST['state'];
session_start();

if ($_POST['confirmpassword'] != $user->password){
    $_SESSION['signup_error']= "Sorry, passwords do not match"; 
    header("Location: ../register.php");
}

else if ($user->registerVendor()){
    if(isset($_SESSION['signup_error'])){
        unset($_SESSION["signup_error"]);
    }
    $_SESSION['id']= $user->id; 
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['name']= $user->firstname;
    $_SESSION['user_type'] = "vendor";
    $_SESSION['zip-code'] = $user->zipcode;
    header("Location: ../vendor/dashboard.php");
}
else{
    $_SESSION['signup_error']= "Error creating vendor"; 
    header("Location: ../register.php");
}

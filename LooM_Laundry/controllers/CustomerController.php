<?php

include_once '../database/Database.php';
include_once '../models/User.php';

// Database connection
$database = new Database();
$db = $database->create_connection();

$user=new User($db);
$user->firstname =$_POST['fname'];
$user->lastname = $_POST['lname'];
$user->address = $_POST['email'];
$user->phonenumber = $_POST['phonenumber'];
$user->password = $_POST['password'];
$user->streetname = $_POST['streetname'];
$user->zipcode = $_POST['zipcode'];
$user->city = $_POST['city'];
$user->state = $_POST['state'];
session_start();

if ($_POST['confirmpassword'] != $user->password){
    $_SESSION['signup_error']= "Sorry, passwords do not match"; 
    header("Location: ../register.php");
}
else if ($user->state != "Michigan"){
    $_SESSION['signup_error']= "Sorry, we only accept customers from Michigan"; 
    header("Location: ../register.php");
}
else if ($user->registerCustomer()){
    if(isset($_SESSION['signup_error'])){
        unset($_SESSION["signup_error"]);
    }
    $_SESSION['id']= $user->id; 
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['name']= $_POST['fname'];
    $_SESSION['user_type'] = "customer";
    $_SESSION['zip-code'] = $_POST['zipcode'];
    header("Location: ../customer/dashboard.php");
}
else{
    $_SESSION['signup_error']= "Username already exists"; 
    header("Location: ../register.php");
}

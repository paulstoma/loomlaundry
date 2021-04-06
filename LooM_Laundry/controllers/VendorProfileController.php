<?php

include_once '../database/Database.php';
include_once '../models/User.php';
$database = new Database();
$db = $database->create_connection();

session_start();
$user = new User($db);
$user->firstname =$_POST['fname'];

$user->address = $_POST['email'];
$user->phonenumber = $_POST['phonenumber'];
$user->password = $_POST['previouspassword'];

$results=$user->vendorLogin($_SESSION['email'],$user->password);

if ($_POST['newpassword'] != $_POST['confirmnewpassword']){
    $_SESSION['profile_error'] = "Passwords do not match";
    header("Location: ../vendor/updateprofile.php");
}
else if($results->rowCount()>0){
    $user->password = $_POST['newpassword'];
    if ($user->updateVendor()){
        $_SESSION['profile_success'] = "your profile has been updated";
        header("Location: ../vendor/updateprofile.php");
    }
}
else{
    $_SESSION['profile_error'] = "Invalid current password";
    header("Location: ../vendor/updateprofile.php");
}
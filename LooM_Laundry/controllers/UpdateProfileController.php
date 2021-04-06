<?php

include_once '../database/Database.php';
include_once '../models/User.php';
$database = new Database();
$db = $database->create_connection();

session_start();
$user = new User($db);

if (isset($_POST["update-profile"])){
    $user->firstname =$_POST['fname'];
    $user->lastname = $_POST['lname'];
    $user->address = $_POST['email'];
    $user->phonenumber = $_POST['phonenumber'];
    $user->password = $_POST['previouspassword'];

    $results=$user->customerLogin($_SESSION['email'],$user->password);

    if ($_POST['newpassword'] != $_POST['confirmnewpassword']){
        $_SESSION['profile_error'] = "Passwords do not match";
        header("Location: ../customer/updateprofile.php");
    }
    else if($results->rowCount()>0){
        $user->password = $_POST['newpassword'];
        if ($user->updateProfile()){
            $_SESSION['profile_success'] = "your profile has been updated";
            header("Location: ../customer/updateprofile.php");
        }
    }
    else{
        $_SESSION['profile_error'] = "Invalid current password";
        header("Location: ../customer/updateprofile.php");
    }
}
else if (isset($_POST["update-zipcode"])){
    $user->streetname = $_POST["streetname"];
    $user->zipcode = $_POST["zipcode"];
    $user->city = $_POST['city'];

    if ($user->updateAddress()){
        $_SESSION['profile_success'] = "your address has been updated";
            header("Location: ../customer/updateprofile.php");
    }
    else{
        echo $user->streetname;
    }
}
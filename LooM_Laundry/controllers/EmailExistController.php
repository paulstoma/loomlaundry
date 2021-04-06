<?php

include_once '../database/Database.php';
include_once '../models/User.php';
$database = new Database();
$db = $database->create_connection();

session_start();
$user = new User($db);

$user->address = $_POST['email'];
$result = $user->isRegistered();
if($result){
    echo "true";
}else{
    echo "false";
}
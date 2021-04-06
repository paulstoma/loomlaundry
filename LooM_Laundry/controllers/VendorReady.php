<?php

include_once '../database/Database.php';
include_once '../models/Order.php';
$database = new Database();
$db = $database->create_connection();

session_start();
$order = new Order($db);
// var_dump($_POST['order']);
if ($order->readyforPickup($_POST['order'])){
    header("Location: ../vendor/dashboard.php");
}
else{
    echo "Hello";
}
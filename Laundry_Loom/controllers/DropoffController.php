<?php

include_once '../database/Database.php';
include_once '../models/Order.php';
$database = new Database();
$db = $database->create_connection();

session_start();
$order = new Order($db);
$dropoffdate = $_POST['dropoffdate'];
var_dump($order);

if ($order->dropoffDate($_SESSION['order'],$dropoffdate)){
    
    header("Location: ../vendor/dashboard.php");
}
else{
    echo "Hello";
}
<?php

include_once '../database/Database.php';
include_once '../models/Order.php';
$database = new Database();
$db = $database->create_connection();

session_start();
$order = new Order($db);
// var_dump((int)$_POST['order']);
// var_dump((int)$_SESSION['id']);
if ($order->driverPickup((int)$_POST['order'],(int)$_SESSION['id'])){
    header("Location: ../driver/dashboard.php");
}
else{
    echo("Not complete");
}
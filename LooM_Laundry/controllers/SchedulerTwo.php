<?php

include_once '../database/Database.php';
include_once '../models/Order.php';

// Database connection
$database = new Database();
$db = $database->create_connection();
$order = new Order($db);
session_start();

$result = $order->getVendorZipcode();
// var_dump($result);
$order->vendor = $result;
$order->customer = $_SESSION['id'];
$order->bluebag = $_SESSION['blue'];
$order->greenbag = $_SESSION['green'];
$order->specialinstructions = $_SESSION['specialinstructions'];
$order->driverinstructions = $_SESSION['driverinstructions'];
$order->pickupdate = $_POST['orderdate'];
$order->pickuptime = $_POST['working-hours'];
$order->driverstatus = "Pending Collection";
$order->orderstatus = "Pending Collection";

$_SESSION['pickupday'] = $_POST['orderdate'];
$_SESSION['pickuptime'] = $_POST['working-hours'];
$_SESSION['pickupstatus']=$order->driverstatus;
$_SESSION['order_id'] = $order->id;
if ($order->createOrder()){
    header("Location: ../customer/confirmorder.php");
}
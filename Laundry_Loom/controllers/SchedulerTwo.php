<?php

include_once '../database/Database.php';
include_once '../models/Order.php';

// Database connection
$database = new Database();
$db = $database->create_connection();
$order = new Order($db);
session_start();
$order->vendor = 1;
$order->customer = $_SESSION['id'];
$order->bluebag = $_SESSION['blue'];
$order->greenbag = $_SESSION['green'];
$order->specialinstructions = $_SESSION['specialorder'];
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
<?php

include_once '../database/Database.php';
include_once '../models/Billing.php';
session_start();
$database = new Database();
$db = $database->create_connection();

$billing= new Billing($db);
$billing->customer = $_SESSION['id'];
$billing->price = number_format($_SESSION['total'],2);
$billing->status = 1;
$billing->orderid = $_SESSION['Customer_Order'];

if ($billing->saveBilling()){
    header("Location: ../customer/confirmation.php");
}


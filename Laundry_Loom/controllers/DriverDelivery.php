<?php

include_once '../database/Database.php';
include_once '../models/Order.php';
$database = new Database();
$db = $database->create_connection();

session_start();
$order = new Order($db);
// var_dump($_POST['order']);
// var_dump($_SESSION['id']);
if ($order->collectedVendor($_POST['order'])){
    header("Location: ../driver/vendorcollection.php");
}
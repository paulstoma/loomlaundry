<?php

include_once '../database/Database.php';
include_once '../models/Bags.php';
session_start();
// Database connection
$database = new Database();
$db = $database->create_connection();

$bags = new Bags($db);
$bags->bluebags = $_POST['bluebag'];
$bags->greenbags = $_POST['greenbag'];
$bags->customer = $_SESSION['id'];
$bags->requeststatus = 0;
$bags->requestdate = date('Y-m-d H:i:s');

if ($bags->orderBags()){
    header("Location: ../customer/dashboard.php");
}
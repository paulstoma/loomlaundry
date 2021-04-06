<?php

include_once '../database/Database.php';
include_once '../models/Order.php';
$database = new Database();
$db = $database->create_connection();

session_start();
$order = new Order($db);

$zipcode = $_POST['zipcod'];
$result = $order->zipcodes();

$zipcodes = array();
foreach ($result as $result){
    // $zipcode[] = $result['zipcode'];
    array_push($zipcodes,$result['zipcode']);
}
// var_dump($zipcodes);
echo json_encode($zipcodes);
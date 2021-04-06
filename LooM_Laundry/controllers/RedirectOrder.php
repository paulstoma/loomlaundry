<?php

include_once '../database/Database.php';
include_once '../models/Billing.php';
include_once '../models/Card.php';
session_start();
$database = new Database();
$db = $database->create_connection();

$billing= new Billing($db);
$card = new Card($db);

$billing->customer = $_SESSION['id'];
$billing->price = number_format($_SESSION['total'],2);
$billing->status = 1;
$billing->orderid = $_SESSION['Customer_Order'];

$card->cardno = $_POST['cardno'];
$card->cardname = $_POST['cardname'];
$card->cardtype = $_POST['credit-card-type'];
$card->cardcvc = $_POST['cvc'];
$card->cardvalidmonth = $_POST['credit-valid-month'];
$card->cardvalidyear = $_POST['credit-valid-year'];

if (isset($_POST['agree'])){
    $card->saveCard();
}
else{
    // echo $_POST['agree'];
    var_dump($card);
}
if ($billing->saveBilling()){
    header("Location: ../customer/confirmation.php");
}




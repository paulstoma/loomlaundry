<?php

include_once '../database/Database.php';
include_once '../models/Contact.php';

// Database connection
$database = new Database();
$db = $database->create_connection();

$contact=new Contact($db);

$contact->firstname = $_POST["firstname"];
$contact->secondname = $_POST["secondname"];
$contact->email = $_POST["email"];
$contact->company = $_POST["company"];
$contact->message = $_POST["message"];

if ($contact->saveContactInfo()){
    header("Location: ../index.php");
}
// else{
    // header("Location: ../index.php");
// }

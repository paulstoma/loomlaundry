<?php

include_once '../database/Database.php';
include_once '../models/Feedback.php';
session_start();

$database = new Database();
$db = $database->create_connection();

$feedback = new Feedback($db);
$feedback->customer = $_SESSION['id'];
$feedback->rating = $_POST['star-rating'];
$feedback->message = $_POST['feedbackdescription'];

if ($feedback->submitFeedback()){
    header("Location: ../customer/dashboard.php");
}
else{
    echo("isse");
}
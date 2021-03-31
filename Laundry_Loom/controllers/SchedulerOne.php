<?php

session_start();

$_SESSION['Customer_Order'] = $_SESSION['id'];
$_SESSION['blue'] = $_POST['professionalblue'];
$_SESSION['green'] = $_POST['professionalgreen'];
$_SESSION['specialorder'] = $_POST['specialorder'];
$_SESSION['instruction'] = $_POST['specialinstructions'];
$_SESSION['driverinstructions']= $_POST['specialdriver'];

header("Location: ../customer/scheduler2.php");
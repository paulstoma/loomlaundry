<?php
    include_once '../database/Database.php';
    include_once '../models/Billing.php';
    $database = new Database();
    $db = $database->create_connection();
    session_start();
    if(!isset($_SESSION['user_type'])){ 
        header("Location: index.php");
    }

    $billing = new Billing($db);
    $result = $billing->selectAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Loom - Home Page</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="../index.php">
                <img src="../resources/images/logo.PNG" alt="" width="70" height="60">
            </a>
            <!-- <p class="nav-link text-dark d-none d-lg-block">Welcome <?php echo $_SESSION['user_type']?>, <?php echo $_SESSION['name'];?></p> -->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-right">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../pricing.php">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../testimonials.php">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../faq.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../logout.php">Log Out</a>

                    </li>
                    <li class="nav-item ms-2 d-none d-lg-block">
                        <img class="ms-3" src="../resources/images/profile-pic.png" width="15" height="15">
                        <p class="nav-link py-0"><?php echo $_SESSION['name'];?></p>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="intro-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-12 px-1 login-section ">
                    <div class="list-group list-group-flusht">
                        <a class="list-group-item list-group-item-action text-primary lead mt-2 mx-2" href="dashboard.php">LooM Dashboard</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="scheduler.php">Scheduler</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="pastorders.php">Past Orders</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="updateprofile.php">Update Profile</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="requestbags.php">Request Bags</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="feedback.php">Feedback</a>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 px-1 login-section">
                    <!-- <h4 class="p-2 text-center">Dashboard</h4> -->
                    <!-- <a href="scheduler.php" class="btn btn-primary m-2">Order now</a> -->
                    <!-- <div class="d-grid gap-2">
                        <a class="btn btn-primary m-5"  href="scheduler.php">Order Now</a>
                    </div> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12 bg-white mb-3">
                                <h4 class="text-center pt-3">Profile</h4>
                                <hr>
                                <img class="mx-auto d-block img-fluid" src="../resources/images/profile-pic.png">
                                <p class="lead text-center"><?php echo $_SESSION['name']; ?></p>
                                <p class="lead text-center"><?php echo $_SESSION['email']; ?></p>
                                
                                <div class="d-grid gap-2 pb-4">
                                    <a href="updateprofile.php" class="text-center text-dark">Edit Profile Information</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <div class="container bg-white">
                                    <h4 class="pt-3">Schedule Order</h4>
                                    <hr>
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-primary m-5" href="scheduler.php">Order Now</a>
                                    </div>
                                </div>
                                <div class="container bg-white mt-3">
                                    <h4 class="pt-3">Billing</h4>
                                    <hr>
                                    <?php foreach ($result as $result) :?>
                                        <p class="p-0">Order Number - <?php echo $result['Order_ID']?> &nbsp;&nbsp; $<?php echo $result['Price']?> &nbsp;&nbsp;&nbsp;&nbsp; Completed</p>
                                        <hr>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
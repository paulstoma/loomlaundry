<?php
    session_start();
    if(!isset($_SESSION['user_type'])){ 
        header("Location: index.php");
    }
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
                    <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="dashboard.php">LooM Dashboard</a>
                        <a class="list-group-item list-group-item-action text-primary lead mt-2 mx-2" href="scheduler.php">Scheduler</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="pastorders.php">Past Orders</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="updateprofile.php">Update Profile</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="requestbags.php">Request Bags</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="feedback.php">Feedback</a>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 px-0 login-section">
                    <p class="text-center lead pt-3"><strong>Confirm Order</strong></p>
                    <hr class="text-dark py-1">
                    <!-- <form action="../controllers/SchedulerTwo.php" method="post"> -->
                    <div class="px-5">
                        <!-- <p>Active Order</p> -->

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Order</th>
                                    <th scope="col">Order Information</th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Order Placed on</th>
                                    <th><?php echo date('d-m-Y'); ?></th>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo $_SESSION['green'] ?> Comfort Bags</th>
                                    <th>$<?php $greentotal= (double)$_SESSION['green'] * 12.99; echo $greentotal;?></th>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo $_SESSION['blue'] ?> Professional Bags</th>
                                    <th>$<?php $bluetotal= (double)$_SESSION['blue'] * 14.99; echo $bluetotal;?></th>
                                </tr>
                                <tr>
                                    <th scope="row">Tax</th>
                                    <th>$<?php $tax=($bluetotal+$greentotal)*0.16; echo round($tax,2); $_SESSION['tax']=round($tax,2);?></th>
                                </tr>
                                <tr>
                                    <th scope="row">Total</th>
                                    <th>$<?php $total=$bluetotal+$greentotal+$tax; echo round($total,2); $_SESSION['total']=round($total,2);?></th>
                                </tr>
                                <tr>
                                    <th scope="row">Pick Up Day/ Time</th>
                                    <th><?php echo $_SESSION['pickupday'] . " " . $_SESSION['pickuptime'];?></th>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <br> -->
                        
                    </div>
                    
                    <div class="d-grid gap-2 p-5">
                        <a type="submit" class="btn btn-primary" href="checkout.php">Proceed to Check Out</a>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
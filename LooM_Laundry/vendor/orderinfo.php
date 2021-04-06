<?php
    include_once '../database/Database.php';
    include_once '../models/Order.php';
    $database = new Database();
    $db = $database->create_connection();
    session_start();
    if(!isset($_SESSION['user_type'])){ 
        header("Location: index.php");
    }

    $id = $_GET['order-id'];
    $order = new Order($db);
    $result = $order->getOrderInfo($id);
    // var_dump($result);
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
                        <a class="nav-link active" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../logout.php">Log Out</a>

                    </li>
                    <li class="nav-item ms-2 d-none d-lg-block">
                        <img class="ms-5" src="../resources/images/washer.png" width="20" height="20">
                        <p class="nav-link py-0"><?php echo "Welcome Vendor with " . $_SESSION['zip-code'];?></p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="intro-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-12 px-1 login-section ">
                    <!-- <ul class="list-group list-group-flusht">
                        <li class="list-group-item p-4 text-light bg-transparent"><strong><a class="text-dark lead" href="dashboard.php">Mark Received</a></strong></li>
                        <li class="list-group-item p-4 text-light bg-transparent"><strong><a class="text-dark lead" href="ready.php">Ready for Pickup</a></strong></li>
                        <li class="list-group-item p-4 text-light bg-transparent"><strong><a class="text-dark lead" href="dashboard.php">Mark Received</a></strong></li>
                        <li class="list-group-item p-4 text-light bg-transparent"><strong><a class="text-dark lead" href="ready.php">Ready for Pickup</a></strong></li>
                        
                        <li class="list-group-item p-4 text-light bg-transparent"><strong><a class="text-dark lead" href="pastorders.php">Past Orders</a></strong></li>
                        <li class="list-group-item p-4 text-light bg-transparent"><strong><a class="text-dark lead" href="updateprofile.php">Update Profile</a></strong></li>
                        <li class="list-group-item p-4 text-light bg-transparent"><strong><a class="text-dark lead" href="scheduler.php">Scheduler</a></strong></li>
                        <li class="list-group-item p-4 text-light bg-transparent"><strong><a class="text-dark lead" href="feedback.php">Feedback</a></strong></li> 
                    </ul> -->
                    <div class="list-group list-group-flusht">
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="dashboard.php">Mark Received</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="orderstatus.php">Order Status</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="ready.php">Ready for Pickup</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="updateprofile.php">Update Profile</a>

                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 p-3 login-section">
                    <p class="text-center lead pt-3"><strong>Choose LooM Service</strong></p>
                    <hr class="text-dark py-1">
                    <form action="../controllers/SchedulerOne.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="row px-3">
                                    <div class="col-lg-6 col-sm-12 pt-1">Professional (Blue bag):</div>
                                    <div class="col-lg-6 col-sm-12"><input id="bluebag" required name="professionalblue" type="number" placeholder=0 min="0" class="form-control" value="<?php echo $result["BlueBag_Count"]; ?>"></div>
                                </div>
                                <div class="row pt-5 px-3">
                                    <div class="col-lg-6 col-sm-12 pt-1">Professional (Green bag):</div>
                                    <div class="col-lg-6 col-sm-12"><input id="greenbag" required name="professionalgreen" type="number" placeholder=0 min="0" class="form-control" value="<?php echo $result["GreenBag_Count"]; ?>"></div>
                                </div>

                                <!-- <p class="px-3 pt-5">* Hand special items to the driver</p> -->
                            </div>
                            <div class="col-lg-6 col-sm-12 px-5">
                                <p>Special Instructions:</p>
                                <textarea required name="specialinstructions" id="" rows="3" class="form-control"><?php echo $result["Spl_Instructions"]; ?></textarea>

                                <p class="pt-3">Driver Instructions:</p>
                                <textarea required name="specialdriver" id="" rows="3" class="form-control"><?php echo $result["Driver_Instructions"]; ?></textarea>

                                <!-- <button id="proceed" type="submit" class="btn btn-primary mt-4 text-right" disabled>Proceed</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
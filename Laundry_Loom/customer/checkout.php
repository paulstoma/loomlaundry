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
                <div class="col-lg-9 col-sm-12 login-section">
                    <form action="../controllers/RedirectOrder.php" method="post">
                    <!-- <a href="scheduler.php" class="btn btn-primary m-2">Order now</a> -->
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <p class="pt-3 ps-5 pb-3"><strong>Payment Details</strong></p>
                            <div class="ps-4">
                                <label for="exampleInputEmail1" class="form-label text-dark">Card Number</label>
                                <input required name="cardnumber" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="ps-4">
                                <!-- <label for="exampleInputEmail1" class="form-label text-dark">Card Number</label> -->
                                
                                <div class="dropdown my-3 d-grid gap-2">
                                    
                                    <label for="disabledSelect" class="form-label">Credit Card Type</label>
                                    <select name="credit-card-type" id="" class="form-select">
                                        <option value="Master Card">Master Card</option>
                                        <option value="Visa">Visa</option>

                                    </select>
                                </div>
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="ps-4">
                                <label for="exampleInputEmail1" class="form-label text-dark">NAME ON CARD</label>
                                <input required name="nameoncard" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="row pt-3">
                                <div class="col-lg-6 col-md-12">
                                    <div class="ps-4">
                                        <label for="exampleInputEmail1" class="form-label text-dark">CVC CODE</label>
                                        <input required name="cvccode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="ps-4">
                                        <label for="exampleInputEmail1" class="form-label text-dark">VALID THROUGH</label>
                                        <input required name="cvccode" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-check py-3">
                                <input id="agree"class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Save credit card information
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 px-5 py-5">
                            <div class="order-summary bg-white p-3">
                                <h5 class="text-center">
                                    Order Summary
                                </h5>
                                <hr>
                                <p class="text-left ps-4">Items: &nbsp;&nbsp; $<?php echo number_format($_SESSION['total']-$_SESSION['tax'],2); ?></p>
                                <p class="text-left ps-4">Tax: &nbsp;&nbsp; $<?php echo number_format($_SESSION['tax'],2); ?></p>
                                <p class="text-left ps-4">Shipping and handling: &nbsp;&nbsp; $0</p>
                                <hr>
                                <p class="text-danger ps-4">Order Total: &nbsp;&nbsp;$<?php echo number_format($_SESSION['total'],2); ?></p>
                            </div>
                            <button type="submit" class="btn btn-primary px-4 my-4">Place your LooM order</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
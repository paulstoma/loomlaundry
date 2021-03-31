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
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="scheduler.php">Scheduler</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="pastorders.php">Past Orders</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="updateprofile.php">Update Profile</a>
                        <a class="list-group-item list-group-item-action text-primary lead mt-2 mx-2" href="requestbags.php">Request Bags</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="feedback.php">Feedback</a>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 px-0 login-section">
                    <!-- <p class="display-6 p-3 text-center"><strong>Request bags</strong></p> -->
                    <form action="../controllers/BagsController.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="centered text-centered py-4">
                                    <img src="../resources/images/img-3.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image" height=125 width=125>
                                </div>
                                <h4 class="text-center pb-3">Blue Bag (Everyday Essentials)</h4>
                                <p class="text-center px-5">
                                    The Blue Bag ust might put your washer and dryer out of a job. All items to wash, dry, and fold.
                                    1 blue bag is included in the welcome kit
                                </p>
                                <div class="mx-5 px-5 pb-3">
                                    <!-- <label for="exampleInputEmail1" class="form-label text-light">First Name</label> -->
                                    <input required name="bluebag" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="centered text-centered py-3">
                                    <img src="../resources/images/img-6.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image" height=100 width=100>
                                </div>
                                <h4 class="text-center pb-3">Green Bag (Professionals)</h4>
                                <p class="text-center px-5">
                                    The Green Bag just might put your washer & dryer out of a job. All items to wash, dry, fold, and iron.
                                    1 Green bag is included in the welcome kit
                                </p>
                                <div class="mx-5 px-5 pb-3">
                                    <!-- <label for="exampleInputEmail1" class="form-label text-light">First Name</label> -->
                                    <input required name="greenbag" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="d-grid gap-2 p-5 justify-content-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
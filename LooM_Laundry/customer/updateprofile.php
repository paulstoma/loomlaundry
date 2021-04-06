<?php
    include_once '../database/Database.php';
    include_once '../models/User.php';
    $database = new Database();
    $db = $database->create_connection();
    session_start();
    if(!isset($_SESSION['user_type'])){ 
        header("Location: index.php");
    }
    $user = new User($db);
    $results=$user->selectUser($_SESSION['id']);
    // var_dump($results);
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
                        <a class="list-group-item list-group-item-action text-primary lead mt-2 mx-2" href="updateprofile.php">Update Profile</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="requestbags.php">Request Bags</a>
                        <a class="list-group-item list-group-item-action text-dark lead mt-2 mx-2" href="feedback.php">Feedback</a>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 px-0 login-section px-4">
                    <!-- <h4 class="p-4 text-center">Update Profile</h4> -->
                    <div class="container ">
                        <form action="../controllers/UpdateDriverProfile.php" method="post">
                        <div class="row bg-white">
                            <?php if (isset($_SESSION['profile_error']) and $_SESSION) {?>
                                <div class="alert alert-danger" role="alert"><?php echo $_SESSION['profile_error']; unset($_SESSION['profile_error'])?></div>  
                            <?php }?>
                            <?php if (isset($_SESSION['profile_success']) and $_SESSION) {?>
                                <div class="alert alert-success" role="alert"><?php echo $_SESSION['profile_success']; unset($_SESSION['profile_success'])?></div>  
                            <?php }?>
                            <div class="col-lg-6 col-sm-12">
                                <img class="mx-auto d-block img-fluid px-4 mb-0" src="../resources/images/profile-pic.png" height="200" width="300">
                                <div class="row px-3">
                                    <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">Zipcode</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input name="zipcode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $results['C_ZipCode']?>">
                                    </div>
                                </div>
                                <div class="row px-3 py-2">
                                    <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">Street Name</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input name="streetname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $results['C_StreetName']?>">
                                    </div>
                                </div>
                                <div class="row px-3 py-2">
                                    <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">City</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input name="city" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $results['C_City']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 p-3 pt-5">
                                <div class="row py-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input required name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $results['C_FirstName']?>">
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input name="lname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $results['C_LastName']?>">
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $results['C_Address']?>">
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input required name="phonenumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $results['C_PhoneNumber']?>">
                                    </div>
                                </div>
                                <!-- <div class="row py-1"> -->
                                    <!-- <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">Address</label>
                                    </div> -->
                                    <!-- <div class="col-lg-8 col-sm-12">
                                        <input required name="address" type="text" class="form-control" id="exampleInputEmail1"  value="<?php echo $results['C_StreetName']?>">
                                    </div> -->
                                <!-- </div> -->
                                <div class="row py-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">Existing Password</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input name="previouspassword" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">New Password</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input name="newpassword" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <label for="exampleInputEmail1" class="form-label">Confirm New Password</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input name="confirmnewpassword" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="d-grid gap-2">
                                    <input class="btn btn-primary my-3" name="update-zipcode" type="submit" value="Update Address">
                                    <!-- <button class="btn btn-primary my-3" name="update-zipcode" type="submit">Update Address</button> -->
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="d-grid gap-2">
                                    <input class="btn btn-primary my-3" name="update-profile" type="submit" value="Update Profile">
                                    <!-- <button class="btn btn-primary my-3" name="update-profile" type="submit">Update Profile</button> -->
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
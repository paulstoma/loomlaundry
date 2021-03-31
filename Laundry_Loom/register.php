<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Loom - Home Page</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="resources/images/logo.PNG" alt="" width="70" height="60">
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-right">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link active" href="#">Services</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pricing.php">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="testimonials.php">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="faq.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="#">About Us</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About us</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link btn btn-primary text-light px-4" href="index.php">Log In</a>
                    </li>  <span class="text-danger">*</span> 
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="intro-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 px-0">
                    <div class="login-section p-5">
                        <h4 class="display-5 text-center"><strong>Create Account</strong></h1>
                        <form action="controllers/CreateUserController.php" method="POST" autocomplete="off">
                            <?php if (isset($_SESSION['signup_error']) and $_SESSION) {?>
                                <div class="alert alert-danger" role="alert"><?php echo $_SESSION['signup_error']; unset($_SESSION['signup_error'])?></div>  
                            <?php }?>
                            <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">Zip Code  <span class="text-danger">*</span> </label>
                                        <input required name="zipcode" type="number" class="form-control" id="zipcode" aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                        <div class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                        <p class="small text-danger d-none" id="zipcode-error">Sorry, we are only in Michigan</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">Home Address  <span class="text-danger">*</span> </label>
                                        <input required name="streetname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">First Name  <span class="text-danger">*</span> </label>
                                        <input required name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">Last Name  <span class="text-danger">*</span> </label>
                                        <input required name="lname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">Phone Number  <span class="text-danger">*</span> </label>
                                        <input id="phonenumber" required name="phonenumber" type="text" class="form-control" placeholder="eg. 123-456-7890">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                        <p class="small text-danger d-none" id="phoneno-error">Enter a valid phone number</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">Email  <span class="text-danger">*</span> </label>
                                        <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                        <p class="small text-danger d-none" id="email-error">Enter a valid email</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">Password  <span class="text-danger">*</span> </label>
                                        <input required id="password" name="password" type="password" class="form-control" aria-describedby="emailHelp">
                                        <svg class="d-none" id="tick" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-check2" viewBox="0 0 16 16">
                                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                        <p class="small text-danger d-none" id="password-validation">* Password should have 8 characters, and $, % signs</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">Re-enter password  <span class="text-danger">*</span> </label>
                                        <input id="confirmpassword" required name="confirmpassword" type="password" class="form-control" aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                        <p class="small text-danger d-none" id="password-error">Passwords do not match</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">City <span class="text-danger">*</span></label>
                                        <input required name="city" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">State <span class="text-danger">*</span></label>
                                        <input required name="state" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input id="agree" onclick="errorTyping()" class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        By creating an account, you agree to the Looms Condition of Use and Privacy
                                    </label>
                                </div>
                                <!-- <p><strong>By creating an account, you agree to the Looms Condition of Use and Privacy</strong> </p> -->
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" id="sign-in" disabled>Create your LooM Account</button>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="index.php" class="text-dark register-link" id="is-registered">Already registered? Log in</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="resources/js/validate.js"></script>
    <!-- <script src="resources/js/ajaxzipcode.js"></script> -->
</body>

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
                        <a class="nav-link active" href="services.php">Services</a>
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
                        <a class="nav-link active" href="about.php">About Us</a>
                    </li> -->
                    <li class="nav-item ms-2">
                        <a class="nav-link btn btn-primary text-light" href="index.php">Log In</a>
                    </li>
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
                        <p class="small text-center text-primary">Do you own a car? Or provide laundry cleaning service? Contact us for more information.</p>
                        <form id="form" action="controllers/ContactusController.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">First Name:</label>
                                        <input required name="firstname" type="text" class="form-control" id="recipient-name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Second Name:</label>
                                        <input required name="secondname" type="text" class="form-control" id="recipient-name">
                                    </div>  
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Email:</label>
                                        <input required name="email" type="email" class="form-control" id="recipient-name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Company Name:</label>
                                        <input required name="company" type="text" class="form-control" id="recipient-name">
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea required name="message" class="form-control" id="message-text"></textarea>
                            </div>
                            <div class="modal-footer">
                                
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Submitted Successfully</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> -->
        </div>
        <div class="modal-body">
            <p>Thank you for your interest. A LooM representative will get in touch with you</p>
        </div>
        <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <a href="index.php" type="button" class="btn btn-primary">Go to home page</a>
        </div>
        </div>
    </div>
    </div>
    <footer class="bg-primary mb-0">
        <!-- <p class="text-center mb-0 text-light py-2">&copy; Laundry Loom <?php echo date("Y")?></p> -->
        <div class="row justify-content-center m-0 text-center px-5 py-2">
            <div class="col-md-1 col-sm-12 m-0 px-lg-0">                
                <a class="nav-link text-light px-lg-0" aria-current="page" href="index.php">Home</a>
            </div>
            <div class="col-md-1 col-sm-12 m-0 px-lg-0">                
                <a class="nav-link text-light px-lg-0" href="services.php">Services</a>
            </div>      
            <div class="col-md-1 col-sm-12 m-0 px-lg-0">                 
                <a class="nav-link text-light px-lg-0" href="pricing.php">Pricing</a>
            </div>
            <div class="col-md-1 col-sm-12 m-0 px-lg-0">                
                <a class="nav-link text-light px-lg-0" href="testimonials.php">Testimonials</a>
            </div>
            <div class="col-md-1 col-sm-12 m-0 px-lg-0">                
                <a class="nav-link text-light px-lg-0" href="faq.php">FAQs</a>
            </div>
            <div class="col-md-1 col-sm-12 p-0 mx-lg-3">            
                <a class="nav-link text-light px-lg-0" href="about.php">About Us</a>
            </div>
            <div class="col-md-1 col-sm-12 p-0 mx-lg-3">            
                <a class="nav-link text-light px-lg-0" href="contact.php">Contact Us</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="resources/js/modal.js"></script>
</body>

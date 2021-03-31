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
                        <a class="nav-link active" href="#">About Us</a>
                    </li> -->
                    <li class="nav-item ms-2">
                        <a class="nav-link btn btn-primary text-light px-4" href="index.php">Log In</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="intro-section">
        <div class="container login-section">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-sm-12 p-4">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 py-3 bg-white my-5 py-2">
                            <p class="text-center text-secondary">
                                <strong>CLEAN</strong>
                            </p>
                            <div class="centered text-centered">
                                <img src="resources/images/shirt.png" class="img-thumbnail img-fluid" id="center-image" alt="shirt image" height=100 width=100>
                            </div>
                            
                            <p class="text-center mt-4 link-primary">$4.99</p>
                            <ul class="pricing">
                                <li class="mx-2">Wash</li>
                                <li class="mx-2">Dry</li>
                                <li class="mx-2">Fold</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-sm-12 py-5 bg-white my-3 py-5" style="border:1px solid gray;">
                            <p class="text-center text-secondary">
                                <strong>COMFORT</strong>
                            </p>
                            <div class="centered text-centered">
                                <img src="resources/images/t-shirt.png" class="img-thumbnail img-fluid" id="center-image" alt="shirt image" height=100 width=100>
                            </div>
                            
                            <p class="text-center mt-4 link-primary">$6.99</p>
                            <ul class="pricing">
                                <li class="mx-2">Wash</li>
                                <li class="mx-2">Dry</li>
                                <li class="mx-2">Fold</li>
                                <li class="mx-2">Fabric Softener</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-sm-12 py-3 bg-white my-5 py-2">
                            <p class="text-center text-secondary">
                                <strong>PROFESSIONAL</strong>
                            </p>
                            <div class="centered text-centered">
                                <img src="resources/images/shirt.png" class="img-thumbnail img-fluid" id="center-image" alt="shirt image" height=100 width=100>
                            </div>
                            
                            <p class="text-center mt-4 link-primary">$9.99</p>
                            <ul class="pricing">
                                <li class="mx-2">Wash</li>
                                <li class="mx-2">Dry</li>
                                <li class="mx-2">Fold</li>
                                <li class="mx-2">Starch</li>
                                <li class="mx-2">Hanger</li>
                            </ul>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark mb-0">
        <p class="text-center mb-0 text-light py-2">&copy; Laundry Loom <?php echo date("Y")?></p>
    </footer>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p class="small text-center text-primary">Do you own a car? Or provide laundry cleaning service? Contact us for more information.</p>
                <form action="controllers/ContactusController.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">First Name:</label>
                                <input name="firstname" type="text" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Second Name:</label>
                                <input name="secondname" type="text" class="form-control" id="recipient-name">
                            </div>  
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input name="email" type="email" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Company Name:</label>
                                <input name="company" type="text" class="form-control" id="recipient-name">
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea name="message" class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

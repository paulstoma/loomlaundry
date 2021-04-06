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
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="about.php">About Us</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About us</a>
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
                <div class="col-lg-12 col-sm-12 py-5">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="card py-4">
                                <div class="card-body">
                                    <h4 class="card-title text-center">John Mark</h4>
                                    <img class="mx-auto d-block" src="resources/images/user.png" height="60" width="60">
                                    <p class="card-text text-center pt-4">"I really love Laundry LooM and appreciate the workers and all they have done to keep the store well running with the amazing staff and even through this pandemic they've made us feel reassured and comfortable washing here."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="card py-4">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Mary May</h4>
                                    <img class="mx-auto d-block" src="resources/images/user.png" height="60" width="60">
                                    <p class="card-text text-center pt-4">"I will continue to come here for years to come." </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="card py-4">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Jane Doe</h4>
                                    <img class="mx-auto d-block" src="resources/images/user.png" height="60" width="60">
                                    <p class="card-text text-center pt-4">"The clothes are returned clean with no wrinkles"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="card py-4">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Mark</h4>
                                    <img class="mx-auto d-block" src="resources/images/user.png" height="60" width="60">
                                    <p class="card-text text-center pt-4">"I love the services!!! Will definately be back"</p>
                                </div>
                            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

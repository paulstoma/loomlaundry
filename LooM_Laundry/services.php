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
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="about.php">About us</a>
                    </li> -->
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
    <!-- <div class="intro-section">
        <div class="container login-section">
            <div class="row justify-content-center">
                <h1 class="text-center p-3 text-primary">Laundry LooM - Available in Michigan!</h1>
                <div class="centered text-centered">
                    <img src="resources/images/img-2.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image">
                </div>
            </div>
        </div>
        <div class="container login-section">
            <div class="row justify-content-center">
                <p class="p-4 text-center">Laundry LooM cleaning company is available in Michigan! Bringing happiness to homes with a fresh approach to home cleaning services. We know you're busy and that you would love to swap some of your household chores for time with the kids, friends, or just an hour or two of relaxing in front of the TV, so we're empowering you to take back your free time with a simple tap of a button.</p>
            </div>
        </div>
    </div> -->
    <div class="services-section pt-5">
        <div class="container-fluid mx-0">
            <div class="row">
                <div class="col-lg-8 col-sm-12 mx-0">
                    <div class="centered text-centered">
                        <img src="resources/images/services-1.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image">
                    </div>
                    
                </div>
                <div class="col-lg-4 col-sm-12 mx-0 pt-5">
                    <h1 class="display-2 strong pt-5">
                        LooM is the new Washing Machine
                    </h1>
                </div>
            </div>
            
        </div>
        <div class="container py-4">
            <h1 class="display-4 text-center pt-4">Comfort</h1>
            <div class="row py-lg-0">
                <div class="col-md-4 col-sm-12">
                    <div class="centered text-centered py-2">
                        <img src="resources/images/services-3.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image">
                    </div>
                    <div class="centered text-centered py-2">
                        <img src="resources/images/services-4.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="centered text-center py-2 pt-5">
                        <h6 class="text-center pt-lg-5">COMFORT</h6>
                        <p>Wash, dry, fold</p>
                        <p>&#10003; Use blue bag</p>
                        <img src="resources/images/img-3.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 pt-lg-5">
                    <h5 class="pt-lg-5">Services for?</h5>
                    <ul>
                        <li>Clothes for everyday use.</li>
                        <li>Towels, Small to Medium Comforters (should fit in LooM bag)</li>
                        <li>Charged by bag</li>
                    </ul>
                    <h5>Services includes?</h5>
                    <ul>
                        <li>Washed, dried and folded.</li>
                        <li>Cool Wash</li>
                        <li>Tumble dried in medium heat</li>
                        <li>Whites will be separated upon special instructions.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container pt-0">
            <h1 class="display-4 text-center">Professional</h1>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="centered text-centered py-2">
                        <img src="resources/images/services-2.png" class="img-thumbnail img-fluid" id="center-image" alt="shirt image">
                    </div>
                    <div class="centered text-centered py-2">
                        <img src="resources/images/img-7.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="centered text-center py-2 pt-5">
                        <h6 class="text-center pt-lg-5">PROFESSIONAL</h6>
                        <p>Wash, Dry, Iron, Fold / Hanger</p>
                        <p>&#10003; Use green bag</p>
                        <img src="resources/images/img-6.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 pt-lg-5">
                    <h5 class="">Services for?</h5>
                    <ul>
                        <li>Clothes for professional use or occasional wear..</li>
                        <li>Charged by bag</li>
                    </ul>
                    <h5>Services includes?</h5>
                    <ul>
                        <li>Washed, dried and Ironed.</li>
                        <li> Folded or left on hanger </li>
                        <li>Cool Wash</li>
                        <li>Tumble dried in medium heat</li>
                        <li>Whites will be separated by default.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-primary mb-0">
        <!-- <p class="text-center mb-0 text-light py-2">&copy; Laundry Loom <?php echo date("Y")?></p> -->
        <div class="row justify-content-center m-0 text-center px-5 py-2">
            <div class="col-md-2 col-sm-12 m-0">                
                <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
            </div>
            <div class="col-md-2 col-sm-12 m-0">                

                <a class="nav-link text-light" href="services.php">Services</a>
            </div>      
            <div class="col-md-2 col-sm-12 m-0">                 
                <a class="nav-link text-light" href="pricing.php">Pricing</a>
            </div>
            <div class="col-md-2 col-sm-12 m-0">                
                <a class="nav-link text-light" href="testimonials.php">Testimonials</a>
            </div>
            <div class="col-md-2 col-sm-12 m-0">                
                <a class="nav-link text-light" href="faqs.php">FAQs</a>
            </div>
            <div class="col-md-2 col-sm-12 m-0">            
                <a class="nav-link text-light" href="contact.php">Contact Us</a>
            </div>
        </div>
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

<?php 
    session_start();    
    // if(isset($_SESSION['user_type'])){ 
    //     if ($_SESSION['user_type']=="customer"){
    //         header("Location: customer/dashboard.php");
    //     }else if ($_SESSION['user_type']=="driver"){
    //         header("Location: driver/dashboard.php");
    //     } else {
    //         header("Location: vendor/dashboard.php");
    //     }
        
    // }
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

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
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
                        <a class="nav-link active" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="aboutus.ph">About Us</a>
                    </li> -->
                    <li class="nav-item ms-2">
                        <a class="nav-link btn btn-primary text-light" href="register.php">Create account</a>
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
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <div class="login-section p-5">
                        <h4 class="display-5 text-center"><strong>Log In</strong></h1>
                        <form method="POST" action="controllers/LoginController.php">
                            <?php if (isset($_SESSION['login_error']) and $_SESSION) {?>
                                <div class="alert alert-danger" role="alert"><?php echo $_SESSION['login_error']; unset($_SESSION['login_error'])?></div>  
                            <?php }?>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-dark">Email address</label>
                                <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-dark">Password</label>
                                <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary px-5" id="sign-in">Sign-in</button>
                            </div>
                            
                            <div class="d-flex justify-content-center">
                                <a href="register.php" class="text-dark text-center register-link p-1" class="p-0">Not a registered user?</a>
                            </div>
                            <div class="d-flex justify-content-center p-0 m-0">
                                <a href="resetpassword.php" class="text-dark text-center register-link p-1">Forgot password?</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="key-features">
        <div class="container-fluid">
            <h1 class="display-4 text-center">Key Features</h1>
            <div class="row .justify-content-center py-4">
                <div class="col-lg-4 col-sm-12">
                    <div class="centered text-centered">
                        <img src="resources/images/washer.png" class="img-thumbnail img-fluid" id="center-image" alt="shirt image" height=100 width=100>
                    </div>
                    
                    <h5 class="text-center mt-4 link-primary">Everyday wear</h5>
                    <p class="text-center pt-2">Let us pick up your dirty laundry, sort it, wash, dry, fold, and deliver back to you in one package</p>
                    <h6 class="text-center mt-4 link-primary">READ MORE</h6>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="centered text-centered">
                        <img src="resources/images/shirt.png" class="img-thumbnail img-fluid" id="center-image" alt="shirt image" height=100 width=100>
                    </div>
                    
                    <h5 class="text-center mt-4 link-primary">Professional wear</h5>
                    <p class="text-center pt-2">Let us pick up your dirty laundry, sort it, wash, dry, fold, and deliver back to you in one package</p>
                    <h6 class="text-center mt-4 link-primary">READ MORE</h6>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="centered text-centered">
                        <img src="resources/images/t-shirt.png" class="img-thumbnail img-fluid" id="center-image" alt="shirt image" height=100 width=100>
                    </div>
                    
                    <h5 class="text-center mt-4 link-primary">Special wear</h5>
                    <p class="text-center pt-2">Let us pick up your dirty laundry, sort it, wash, dry, fold, and deliver back to you in one package</p>
                    <h6 class="text-center mt-4 link-primary">READ MORE</h6>
                </div>
            </div>
            <div class="row px-0 py-5">
                <div class="col-lg-6 col-sm-12">
                    <h4 class="py-4">WE ARE COMMITTED AND COMPASSIONATE ABOUT LAUNDRY</h4>
                    <p>We work with high skilled professionals in the laundry and dry clean business, which means we will always provide a quality service and apply hygiene cleaning methods. 
                        We thrive to deliver a very clean and pleasant smelling laundry delivered to your door neatly packed and ready to wear. </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="centered text-centered">
                        <img src="resources/images/img-2.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="how-it-works p-5">
        <div class="container-fluid">
            <h6 class="text-primary text-center">In 4 easy steps</h6>
            <h4 class="text-center pb-4">HOW IT WORKS</h4>
            <div class="row">
                <div class="col-lg-3 col-sm-12 text-center">
                    <h1 class="display-1">01</h1>
                    <p><span class="text-primary">Bag up</span> all your dirty laundry</p>
                </div>
                <div class="col-lg-3 col-sm-12 text-center">
                    <h1 class="display-1">02</h1>
                    <p>We <span class="text-primary">pick up</span> your dirty laundry</p>
                </div>
                <div class="col-lg-3 col-sm-12 text-center">
                    <h1 class="display-1">03</h1>
                    <p>We <span class="text-primary">clean</span> your dirty laundry</p>
                </div>
                <div class="col-lg-3 col-sm-12 text-center">
                    <h1 class="display-1">04</h1>
                    <p>We <span class="text-primary">deliver</span> your dirty laundry</p>
                </div>
                <div class="row p-5">
                    <div class="col-lg-6 col-sm-12">
                        <div class="centered text-centered">
                            <img src="resources/images/img-2.jpg" class="img-thumbnail img-fluid" id="center-image" alt="shirt image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <h4 class="py-4 text-center">WHY CHOOSE LooM?</h4>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <h5 class="text-primary">Personal Care</h5>
                                <p class="lead"><small>We take utmosst care of your clothes and adhere to all your instructions.</small></p>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <h5 class="text-primary">Convenience</h5>
                                <p class="lead"><small>We do the laundry for you, giving you time to spend with family and friends.</small></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <h5 class="text-primary">Express Delivery</h5>
                                <p class="lead"><small>We will get your clean laundry delivered back in less than 8 hours.</small></p>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <h5 class="text-primary">Quality</h5>
                                <p class="lead"><small>Quality service is our top priority. We pledge to assure your clothes are cared for and delivered clean and fresh.</small></p>
                            </div>
                        </div>
                    </div>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    </div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
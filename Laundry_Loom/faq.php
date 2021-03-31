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
                        <a class="nav-link active" href="contact.php">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="#">About Us</a>
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
        <div class="container login-section">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-sm-12 p-4">
                    <div class="container py-4">
                        <p class="display-6 text-center">FAQs</p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Do I have to provide my own laundry bag?
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- <p class="fw-bold">Do I have to provide my own laundry bag?</p> -->
                                    <p>No, LooM will provide two bags, (1 green, 1 blue) when you sign up as a customer.</p>
                                    <p>Please be sure to separate the laundry(comfort) that requires wash, dry in green bag and laundry (professional) that requires wash,dry,fold,iron in blue bag</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What do I do if I cannot fit all of my laundry in the provided bags?
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- <p class="fw-bold">What do I do if I cannot fit all of my laundry in the provided bags?</p> -->
                                    <p>As a LooM customer, you can order up to 6 LooM bags of each kind (Blue, green) at no additional cost. Please feel free to use option "Request Bags" on your LooM dashboard</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How am I sure my laundry is delivered very clean?
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- <p class="fw-bold">How am I sure my laundry is delivered very clean?</p> -->
                                    <p>LooM is determined to work with experienced laundry vendors to ensure all your instructions to LooM are adhered. We deliver clean laundry in cartons that are for single use only and recycled after. Additionally, your LooM bags are washable and your bags are rinsed prior to being delivered back to you along with your clean laundry.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Where is my laundry cleaned ?
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- <p class="fw-bold">What do I do if I cannot fit all of my laundry in the provided bags?</p> -->
                                    <p>LooM partners with experienced professional cleaning facilities in the serviced areas. Are partners are selected. We work very closely with our partners to provide the best quality service to our customers.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Who picks up and delivers my laundry ?
                                </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- <p class="fw-bold">What do I do if I cannot fit all of my laundry in the provided bags?</p> -->
                                    <p>LooM drivers pick up and deliver your laundry to and from your door step to our cleaning partners. LooM drivers are chosen with a very vigorous vetted process to choose the best personnel that carry LooM ethics and adhere to our quality service.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                     When do you take payment for my order ?
                                </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- <p class="fw-bold">What do I do if I cannot fit all of my laundry in the provided bags?</p> -->
                                    <p>LooM displays the total cost on your order and collects your payment information. LooM does not charge you until the order is delivered back to you.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                     What do I do if my items are missing ?
                                </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- <p class="fw-bold">What do I do if I cannot fit all of my laundry in the provided bags?</p> -->
                                    <p>LooM does everything to be sure that your laundry is in safe hands, but yes this is a very important concern. Please send feedback for your order if anything is missing and we will locate and return it to you.Incase, it cannot be returned LooM will reimburse for you in accordance with LooM policy.</p>
                                </div>
                                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

<?php

include "connect.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    
    

    <link rel="stylesheet" href="css/icomoon.css">
    <link href="style.css" rel="stylesheet">
    <title>E-BANKING</title>
</head>
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">E-Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
           

            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="admin.php" class="nav-link">admin</a></li>
            
            <li class="nav-item"><a href="" target="_blank" class="nav-link" data-toggle="modal" data-target="#reservationModal">Log In</a></li>
          </ul>
        </div>
      </div>
    </nav>

 <!-- END nav -->

 <section class="site-cover" style="background-image: url(images/i1.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Welcome To E-BANK</h1>
            <h2 class="h5 site-subheading mb-5 site-animate">@ E-BANK MAKE SECURE PAYMENT & GROW UP @</h2> 
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

    
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p>E-banking is also known as online banking or virtual banking.this is an electronic payment system.</p>

            <p class="mb-4">that enables customers of a bank or other financial institution to conduct a range of financial transaction through the financial institution's websight.</p>
           
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="images/bg22.jpg" alt="Free Template by colorlib.com" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Get In Touch</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Bank we believe in providing the best of services to our customers. We provide customers with easy access to information, products and services, as well the means to get their grievances redressed</p>
              </div>
            </div>
          </div>

          <div class="col-md-7 mb-5 site-animate">
            <form action="" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4 site-animate">
            <p><img src="images/bg33.jpg" alt="" class="img-fluid"></p>
            <p class="text-black">
              Address: <br> ASANSOL  <br>  <br> <br>
              Phone: <br> 1234567890 <br> <br>
              Email: <br> <a href="">aiempstudent@gmail.com</a></p>

          </div>
          
        </div>
      </div>
    </section>
    <!-- <div id="map"></div> -->
    <!-- END section -->

    <footer class="site-footer site-bg-dark site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 site-animate">
                <h2 class="site-heading-2">About Us</h2>
                <p> These websites allow customers to conduct transactions on the bank’s website. Further, these transactions can range from a simple retail account balance inquiry to a large business-to-business funds transfer. The following table lists some common retail and wholesale e-banking services offered by banks and financial institutions?</p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">The BANK</h2>
                  <ul class="list-unstyled">
                    <li><a href="#section-about" class="py-2 d-block">ABOUT US</a></li>
                    <li><a href="#" class="py-2 d-block">E_BANKING</a></li>
                    <li><a href="#" class="py-2 d-block">EVENTS</a></li>
                    <li><a href="#" class="py-2 d-block">CONTACT</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">FIXED DEPOSIT</a></li>
                    <li><a href="#" class="py-2 d-block">INTAREST</a></li>
                    <li><a href="#" class="py-2 d-block">LOAN</a></li>
                    <li><a href="#" class="py-2 d-block">BRANCH</a></li>
                    <li><a href="#" class="py-2 d-block">LOAN INTAREST</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">FAST TRANSACTION</a></li>
                    <li><a href="#" class="py-2 d-block">TRANSACTION</a></li>
                    <li><a href="#" class="py-2 d-block">PAYMENT</a></li>
                    <li><a href="#" class="py-2 d-block">BRANCH</a></li>
                    <li><a href="#" class="py-2 d-block">CASH BACK</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href=""><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy; 
Copyright <script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made by <a href="https://skirfan.com" target="_blank">AIEM-P_STUDENTS</a>
</p>
          </div>
        </div>
      </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
             
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">User Log In</h1>  
                <form action="customer_login_action.php" method="post">
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email" name="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_password">Password</label>
                      <input type="password" class="form-control" id="m_pass" name="pass">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6 form-group">
                      <input type="submit" class="btn btn-success" value="Log In">
                    </div>
                    <div class="col-md-4 form-group">
                      <a href="index.html" class="btn btn-danger">Cancel</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6"><h4> Create an account <a href="signup.php">Sign Up?</a></h4></div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>
</body>
</html>
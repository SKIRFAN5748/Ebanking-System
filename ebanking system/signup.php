<!DOCTYPE html>
<html>
<head>
  <title>SignUp</title>
 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="container">
                <h1 class="mb-4">Sign Up</h1>  
                
                <form action="useradd.php" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Full Name</label>
                      <input type="text" class="form-control" id="m_fname" name="fname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email" name="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_password">New Password</label>
                      <input type="password" class="form-control" id="m_pass1" name="pass1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_password">Confirm Password</label>
                      <input type="password" class="form-control" id="m_pass2" name="pass2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_address">Address</label>
                      <textarea class="form-control" id="m_address"  name="add" cols="30" rows="7"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input type="text" class="form-control" id="m_phone" name="phone">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_atype">Account Type</label>
                      <select name="atype" class="form-control">
                        <option value="0">Select</option>
                        <option value="Savings">Savings</option>
                        <option value="Current">Current</option>
                      </select>
                    </div>
                  </div>
                  

                  
                  
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6 form-group">
                      <input type="submit" class="btn btn-success" value="Sign Up">
                    </div>
                    <div class="col-md-4 form-group">
                      <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

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


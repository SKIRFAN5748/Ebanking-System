<!DOCTYPE html>
<html>
<head>
  <title>Update Profile</title>
 
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
	<?php
	 if(!isset($_SESSION)) {
        session_start();
        
    }

    include "connect.php";
    $id='';
    $row='';
    if(isset($_SESSION["loggedIn_users_id"]))
    
    $id = $_SESSION['loggedIn_users_id'];
    
$sql2 = mysqli_query($conn,"SELECT * from users where users_id =".$id);
if ( !empty($sql2->num_rows) && $sql2->num_rows > 0)
$row = mysqli_fetch_array($sql2);
    ?>
<section class="container">
  
                <h1 class="mb-4">Update Profile</h1>  
                <form action="edit.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Full Name</label>
                      <input type="text" class="form-control" id="m_fname" name="fname" value="<?php  echo $row[1]; ?>">
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_address">Address</label>
                      <textarea class="form-control" id="m_address"  name="add" cols="30" rows="7"><?php echo $row[3]; ?></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input type="text" class="form-control" id="m_phone" name="phone" value="<?php echo $row[2]; ?>">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_phone">Upload Profile Picture</label>
                      
                      <input type="file" class="form-control" id="m_file" name="image">
                    </div>
                  </div>
                  
                  
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6 form-group">
                      <input type="submit" class="btn btn-success" name="okk" value="Update">
                    </div>
                    <div class="col-md-4 form-group">
                      <a href="Dashboard.php" class="btn btn-danger">Cancel</a>
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



<?php



            include("connect.php");
           
            if(isset($_POST["okk"])){

        $id = $_SESSION['loggedIn_users_id'];

if (empty($_FILES['image']['name'])) {
	
	$sql = mysqli_query($conn,"UPDATE users SET fname = '$_POST[fname]',address = '$_POST[add]',phone = '$_POST[phone]' where users_id =".$id);
}
else{
	$target_dir = "images/";
$target_file = $target_dir .rand(00,99). basename($_FILES['image']['name']);

$file_tmp =$_FILES['image']['tmp_name'];


move_uploaded_file($file_tmp, $target_file);
	$sql = mysqli_query($conn,"UPDATE users SET fname = '$_POST[fname]',address = '$_POST[add]',phone = '$_POST[phone]',image = '$target_file' where users_id = ".$id);
}



      echo "Successfully Edited";
}

?>
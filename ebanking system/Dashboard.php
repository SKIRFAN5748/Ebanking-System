<?php
$id='';
$name=$email=$address=$acno=$balance='';

if(!isset($_SESSION)) {
    session_start();
}

   
    include "connect.php";
    if(isset($_SESSION["loggedIn_users_id"]))
    $id = $_SESSION['loggedIn_users_id'];
    
    
    $sql0 = "SELECT * FROM users WHERE users_id=".$id;
    $sql1 = "SELECT * FROM account_details WHERE users_id=".$id;

    $result0 = $conn->query($sql0);
    $result1 = $conn->query($sql1);
if($result0!==false && $result0->num_rows > 0)
    if ($result0->num_rows > 0) {
        // output data of each row
        while($row = $result0->fetch_assoc()) {
            $name = $row["fname"];
            $email = $row["email"];
            $phno = $row["phone"];
            $address = $row["address"];
            $users_id = $row["users_id"];
            $password= $row["password"];
            $image=$row["image"];
        }
    }


    if($result1 !==false && $result1->num_rows > 0)
    if ($result1->num_rows > 0) {
        // output data of each row
        while($row = $result1->fetch_assoc()) {
            $balance = $row["balance"];
            $acno = $row["account_no"];
            $acc_type=$row["acc_type"];
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	
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

	
      <div class="container">
      	<center><h1>Welcome To E-Bank</h1></center>
        <div class="row mb-3">
          <div class="col-md-6 site-animate">
          	
          	<p>Your Details</p>
        <table class="table table-striped">


		
			<tr> 
				<th>Name</th><td><?php echo $name;?></td>
                
			</tr>
			<tr>
				<th>Email ID</th><td><?php echo $email;?></td>
			</tr>
			<tr>
				<th>Address</th><td><?php echo $address;?></td>
			</tr>
			<tr>
				<th>Account No</th><td><?php echo $acno;?></td>
			</tr>
			<tr>
				<th>Account Type</th><td><?php echo $acc_type;?></td>
			</tr>
			<tr>
				<th>Balance</th><td><?php echo $balance;?></td>
			</tr>
		
        </table>
            
          
        </div>
          <div class="col-md-2"></div>
          <div class="col-md-4 site-animate img" data-animate-effect="fadeInRight">
            <img src="<?php echo  $image; ?>" alt="" class="img-fluid">
          </div>
        </div>
      </div>
			
<section class="container">
	<div class="row lg-5">
		
        <div class="col-md-2">
	        <a href="edit.php" class="btn btn-success mr-4">Edit Profile</a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2">
	        <a href="customer_home.php" class="btn btn-danger mr-4">Back</a>
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

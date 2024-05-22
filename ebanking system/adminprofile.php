<!DOCTYPE html>
<html>
<head>
	<title>Admin-Dashboard</title>
	
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
	<link rel="stylesheet" href="customer_add_style.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<table class="table table-striped">
	<tr>
				<th>Name</th>
			
				<th>Email ID</th>
			
			
			
				<th>Account No</th>
			
				<th>Account Type</th>
			
				<th>Balance</th>
				<th>Approve</th>
				<th>Delete User</th>
	</tr>
	
<?php
			
			
include("connect.php");
			
$sql = mysqli_query($conn,"SELECT * FROM users cd INNER JOIN account_details a WHERE cd.users_id = a.users_id");
// $sql1 = mysqli_query($conn,"SELECT * FROM account");


	while($row = mysqli_fetch_array($sql)){ ?>

				<tr>
					<td><?php echo $row['fname'];?></td>
					<td><?php echo $row['email'];?></td>
					
				
					<td><?php echo $row['account_no'];?></td>
					<td><?php echo $row['acc_type'];?></td>
					<td><?php echo $row['balance'];?></td>
					<td>
						<?php if($row['status'] == 0){ ?>
							<a href="status.php?id=<?php echo $row[0];?>" onclick="return confirm('Do you want to Approved?');"><i class="icon-cross">Dis-approved</i></a></td>
						<?php } ?>
						<?php if($row['status'] == 1){ ?>
							<a href="status.php?id=<?php echo $row[0];?>" onclick="return confirm('Do you want to dis-approved?');"><i class="icon-check">Approved</i></a></td>
						<?php } ?>

					<td><a href="delete.php?id=<?php echo $row[0];?>" onclick="return confirm('Do you want to delete?');"><i class="icon-trash">Delete</i></a></td>
				</tr>
<?php } ?>

		</table>


	<!-- </section> -->
	
		<div class="container">
            <a href="adminhome.php" class="button">Go Back</a>
    	</div>
	
			
		
			

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
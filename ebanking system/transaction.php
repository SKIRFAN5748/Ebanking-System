<?php
if(!isset($_SESSION)) {
  session_start();
}
include("connect.php");
$id='';
if(isset($_SESSION["loggedIn_users_id"]))
$id = $_SESSION['loggedIn_users_id'];

$sql = mysqli_query($conn,"SELECT * FROM account_details WHERE users_id = '$id'");

$row = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Make Transaction</title>
    
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
        <div class="row mt-3">

          <div class="col-md-12 site-animate">
            <h1 class="">Make Transaction</h1> 


            <form action="transaction.php" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label>Your/Payer Account No.</label>
                      <input type="text" class="form-control" name="from_acc" value="<?php echo $row[2];?>">
                    </div>

                    <div class="col-md-6 form-group">
                      <label>Payee Account No.</label>
                      <input type="text" class="form-control" name="to_acc">
                    </div>
                   
          </div>

                 <div class="row">
                  <div class="col-md-3 form-group"></div>
                   <div class="col-md-6 form-group">
                      <center><label>Amount</label></center>
                      <input type="text" class="form-control" name="amount">
                    </div>
                    <div class="col-md-3 form-group"></div>
                 </div>


                  <div class="row">
                     <div class="col-md-3 form-group"></div>
                    <div class="col-md-4 form-group">
                      <input type="submit" class="btn btn-info" value="Payment" name="transaction">
                    </div>
                    <div class="col-md-4 form-group">
                      <a href="customer_home.php" class="btn btn-danger">Back</a>
                    </div>

                  </div>
                  
              </form>
          </div>
      </div>
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
<?php
 if(isset($_POST['transaction'])){
  include("connect.php");
$sql= mysqli_query($conn, "SELECT * from account_details where account_no='$_POST[to_acc]'");
if (mysqli_num_rows($sql)>0) {
  $sql3= mysqli_query($conn, "SELECT BALANCE from account_details where account_no='$_POST[from_acc]'");
  $row3=mysqli_fetch_array($sql3);
  if ($row3[0]<$_POST['amount']) {?>
    <div class="alert alert-danger"><?php 
  echo "Insufficient balance";
  exit();
  ?>
  </div><?php
    
  }
    $date = date('y-m-d');
  $sql = mysqli_query($conn, "INSERT INTO transaction(from_acc_no,to_acc_no	,trans_date,amount) VALUES('$_POST[from_acc]','$_POST[to_acc]','$date','$_POST[amount]')");
  $sql1= mysqli_query($conn,"UPDATE account_details set BALANCE=BALANCE+'$_POST[amount]' where account_no='$_POST[to_acc]' ");
  $sql2= mysqli_query($conn,"UPDATE account_details set BALANCE=BALANCE-'$_POST[amount]' where account_no='$_POST[from_acc]' ");

?>
  <div class="alert alert-success"><?php 
  echo "Successfully Tranfer Money.";?>
  </div><?php

}
else{?>
  <div class="alert alert-danger"><?php 
  echo "Please enter correct account no.";?>
  </div><?php
}
}

?>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Transaction Details</title>
    
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
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <tr>
                        <th>Transaction ID</th>
                        <th>Payer Account No.</th>
                        <th>Transaction Date</th>
                        <th>Amount</th>
                        <th>Trasaction Type</th>
                    </tr>
            <?php
            include("connect.php");
            
            $sql = mysqli_query($conn,"SELECT * FROM transaction WHERE FROM_ACC_NO = '$_SESSION[account_no]' or TO_ACC_NO = '$_SESSION[account_no]' order by trans_id desc");
        
            while($row = mysqli_fetch_array($sql)){
    
                if($row['from_acc_no'] == $_SESSION['account_no']){?>
                    <tr>
                        <td><?php echo $row[0];?></td>
                        <td><?php echo $row[2];?></td>
                        <td><?php echo $row[4];?></td>
                        <td><?php echo $row[3];?></td>
                        <td><h5 style="color: red;">Debit</h5></td>
                    </tr>
            <?php   
        }
                    if($row['to_acc_no'] == $_SESSION['account_no']){?>
                    <tr>
                        <td><?php echo $row[0];?></td>
                        <td><?php echo $row[1];?></td>
                        <td><?php echo $row[4];?></td>
                        <td><?php echo $row[3];?></td>
                        <td><h5 style="color: Green;">Credit</h5></td>

                    </tr>
                    <?php
                    
                }
                
            } ?>
                </table>
                
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
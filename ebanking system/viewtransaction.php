<?php
 include("connect.php");
  if(!isset($_SESSION)) {
    session_start();
}
$sqll='';
if(isset($_SESSION["loggedIn_users_id"]))
    $id = $_SESSION['loggedIn_users_id'];
    $sql1 = "SELECT * FROM account_details WHERE users_id=".$id;
    $result1 = $conn->query($sql1);
    if($result1 !==false && $result1->num_rows > 0)
    if ($result1->num_rows > 0) {
        // output data of each row
        while($row = $result1->fetch_assoc()) {
            
            $acno = $row["account_no"];
        }
    }
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
                    <th>Account No.</th>
                    <th>Transaction Date</th>
                    <th>Amount</th>
                    <th>Transaction Type</th>
                </tr>

                <?php
                // Check if user is logged in and has a session variable set
                if (isset($_SESSION["loggedIn_users_id"])) {
                    // Build SQL query to retrieve transactions for the logged-in user
                    $query = "SELECT * FROM transaction WHERE from_acc_no = $acno OR to_acc_no = $acno ORDER BY trans_id DESC";
                    
                    $result = mysqli_query($conn, $query);

                    // Check if query executed successfully
                    if (!$result) {
                        die('Query failed: ' . mysqli_error($conn));
                    }

                    // Check if $result has rows
                    if (mysqli_num_rows($result) > 0) {
                        // Fetch and display transaction details
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['trans_id']; ?></td>
                                <td>
                                    <?php
                                    if ($row['from_acc_no'] == $acno) {
                                        echo $row['to_acc_no'];
                                    } elseif ($row['to_acc_no'] ==$acno) {
                                        echo $row['from_acc_no'];
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row['trans_date']; ?></td>
                                <td><?php echo $row['amount']; ?></td>
                                <td>
                                    <?php
                                    if ($row['from_acc_no'] == $acno) {
                                        echo '<h5 style="color: red;">Debit</h5>';
                                    } elseif ($row['to_acc_no'] == $acno) {
                                        echo '<h5 style="color: green;">Credit</h5>';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='5'>No transactions found.</td></tr>";
                    }

                    // Free result set
                    mysqli_free_result($result);
                } else {
                    echo "<tr><td colspan='5'>Session account_no not set.</td></tr>";
                }
                ?>
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

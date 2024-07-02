<?php
// Create connection
$conn=mysqli_connect("localhost","root","","e_bank");



if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
<?php
include("connect.php");
$sql = mysqli_query($conn,"DELETE FROM users where users_id = '$_GET[id]'");
$sql1 = mysqli_query($conn,"DELETE FROM account_details where users_id = '$_GET[id]'");
header('Location:adminhome.php');
?>
<?php
include("connect.php");
$sql2 = mysqli_query($conn,"SELECT * from users where users_id = '$_GET[id]'");
$row = mysqli_fetch_array($sql2);
if($row[9]==0){
$sql = mysqli_query($conn,"UPDATE users SET status = 1 where users_id= '$_GET[id]'");
}
if($row[9]==1){
$sql = mysqli_query($conn,"UPDATE users SET status = 0 where users_id = '$_GET[id]'");
}
header('Location:adminprofile.php');
?>
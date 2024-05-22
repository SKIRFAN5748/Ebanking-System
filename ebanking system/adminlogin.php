<?php
session_start();
include("connect.php");

$sql = mysqli_query($conn,"SELECT * from admin where admin_email = '$_POST[email]' and admin_password ='$_POST[pass]'");
if(mysqli_num_rows($sql)==1){
	$row = mysqli_fetch_array($sql);
	$_SESSION["adminid"] = $row[0];
	$_SESSION["adminemail"] = $_POST["email"];
	$_SESSION["adminpass"] = $_POST["pass"];
	header('Location: adminhome.php');
}
else
	echo "email-id or password does not match";
?>
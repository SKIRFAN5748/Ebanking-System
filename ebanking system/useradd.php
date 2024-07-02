<?php
//customer details fill-up
// account table fill -up.
include("connect.php");
$sql2 = mysqli_query($conn,"SELECT * from users where email = '$_POST[email]'");
if(mysqli_num_rows($sql2)>0){
	echo "<h2> This email-id already exists</h2>";
}

else{

if($_POST['pass1']==$_POST['pass2']){
    $sql = mysqli_query($conn,"INSERT INTO users(fname,phone,address,email,password,confirm_password,status) values ('$_POST[fname]','$_POST[phone]','$_POST[add]','$_POST[email]','$_POST[pass1]','$_POST[pass2]','0')");
    $sql4 = mysqli_query($conn,"SELECT * from users where email = '$_POST[email]'");
    $row = mysqli_fetch_array($sql4);

    $acc_no1 = rand(0000000,999999);
    $sql1 = mysqli_query($conn,"INSERT INTO account_details (users_id,account_no,acc_type,phone,email,balance) values ('$row[0]','$acc_no1','$_POST[atype]','$_POST[phone]','$_POST[email]','10000')");
    
header('Location:customer_home.php');
}
}
?>

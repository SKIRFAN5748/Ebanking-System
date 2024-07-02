<?php
    include "connect.php";
    
    
    if(!isset($_SESSION)) {
        session_start();
    }

    $uname = mysqli_real_escape_string($conn, $_POST["email"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["pass"]);

    $sql0 =  "SELECT * FROM users WHERE email='".$uname."' AND password ='".$pwd."'";
    $result = $conn->query($sql0);
    $row = $result->fetch_assoc();

    if (($result->num_rows) > 0) {
        $_SESSION['loggedIn_users_id'] = $row["users_id"];
        $_SESSION['isCustValid'] = true;
        $_SESSION['LAST_ACTIVITY'] = time();
        header("location:customer_home.php");
    }
    else {
        session_destroy();
        die(header("location:index.php?loginFailed=true"));
    }
?>

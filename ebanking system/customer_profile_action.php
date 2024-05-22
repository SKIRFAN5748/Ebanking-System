<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    include "connect.php";
    

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $cus_uname = mysqli_real_escape_string($conn, $_POST["name"]);

    $sql0 = "UPDATE users SET email = '$email',
                                 address = '$address',
                                 fname = '$name'
                            WHERE users_id=".$_SESSION['loggedIn_users_id'];;
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/action_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <?php
                if (($conn->query($sql0) === TRUE)) { ?>
                    <p id="info"><?php echo "Values Updated Successfully !"; ?></p>
                <?php
                }
                else { ?>
                    <p id="info"><?php echo "Error: " . $sql0 . "<br>" . $conn->error . "<br>"; ?></p>
                <?php
                }
            ?>
        </div>
        <?php $conn->close(); ?>

        <div class="flex-item">
            <a href="customer_home.php" class="button">Home</a>
        </div>

    </div>

</body>
</html>

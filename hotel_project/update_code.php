<?php
    $hosting = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'signup';
    $con = mysqli_connect($hosting, $user, $password, $database);

    $sno = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = "UPDATE data SET `name`='$name', `email`='$email', `password`='$password' WHERE sno='$sno'";
    $run = mysqli_query($con, $q);

    if ($run) {
        header('location: signup.php');
    } else {
        echo "Data not updated";
    }
?>
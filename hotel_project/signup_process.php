<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

   
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO data (`name`, `email`, `password`) VALUES ('$name', '$email', '$hashedPassword')";
    $run = mysqli_query($con, $query);

    if ($run) {
        
        mysqli_close($con);
        header('Location: login.php'); 
        exit();
    } else {
        
        echo "Registration unsuccessful. Please try again later.";
    }
} else {
    echo "Invalid request.";
}

mysqli_close($con);
?>

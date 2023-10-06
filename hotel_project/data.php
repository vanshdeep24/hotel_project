<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate user inputs
    if ($password != $confirmPassword) {
        echo "Password and Confirm Password do not match.";
    } else {
       
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO data (`name`, `email`, `password`) VALUES ('$name', '$email', '$hashedPassword')";
        $run = mysqli_query($con, $query);

        if ($run) {
            
            echo "Registration successful!";
            header('Location: login.php'); // Redirect to the signup page or another appropriate page
            exit();
        } else {
            
            echo "Registration unsuccessful. Please try again later.";
        }
    }
} else {
    echo "Invalid request.";
}

mysqli_close($con);
?>

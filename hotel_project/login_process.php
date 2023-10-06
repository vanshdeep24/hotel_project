<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_name = $_POST['login_name'];
    $login_password = $_POST['login_password'];

    
    $query = "SELECT `password` FROM data WHERE `name` = '$login_name'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        
        if (password_verify($login_password, $hashedPassword)) {
            
            mysqli_close($con);
            header('Location: welcome.php'); 
            exit();
        } else {
            
            echo "Invalid username or password.";
        }
    } else {
        
        echo "Database error. Please try again later.";
    }
} else {
    echo "Invalid request.";
}

mysqli_close($con);
?>

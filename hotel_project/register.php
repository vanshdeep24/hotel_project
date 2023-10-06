<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $db = new mysqli("localhost", "root", "", "signup");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `data` (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($db->query($sql) === TRUE) {
        echo '<div style="text-align: center; margin: 20px; background-color: #4CAF50; color: white; padding: 10px; border-radius: 5px;">';
        echo "Registration successful.<br><a href='home.php' style='text-decoration: none; color: #fff;'>Click here for the home page</a>";
        echo '</div>';
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    $db->close();
}
?>

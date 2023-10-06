<?php
    include "conn.php";
    $sno = base64_decode($_GET['id']);
    $q = mysqli_query($con, "SELECT * FROM data WHERE sno='$sno'");
    $row = mysqli_fetch_array($q);
if ($q) {
    $row = mysqli_fetch_array($q);
} else {
    echo "Error: " . mysqli_error($con);
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        .signup-container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            width: 300px;
            max-width: 100%;         
            box-sizing: border-box;
        }

        .signup-container input[type="text"],
        .signup-container input[type="email"],
        .signup-container input[type="password"],
        .signup-container button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .signup-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>UPDATE FORM</h1>
    <center>
        <div class="signup-container">
            <h2>Sign Up</h2>
            <form action="update_code.php" method="POST">
                <input type="hidden" value="<?php echo $row[0]; ?>" name="id">

                <br><br>
                <input type="text" value="<?php echo $row[0]; ?>" placeholder="Username" required name="name">
                <br><br>
                <input type="email" value="<?php echo $row[2]; ?>" placeholder="Email" required name="email">
                <br><br>
                <input type="password" value="<?php echo $row[3]; ?>" placeholder="Password" required name="password">
                <button type="submit">Update</button>
            </form>
        </div>
    </center>
</body>
</html>

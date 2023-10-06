<?php
// Database configuration
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "signup";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["sno"])) {
    $sno = $_POST["sno"];
    $deleteQuery = "DELETE FROM `booking` WHERE sno = '$sno'";
    if ($conn->query($deleteQuery) === TRUE) {
        echo "Booking with Serial Number $sno canceled successfully";
        exit();
    } else {
        echo "Error: " . $conn->error;
        exit();
    }
}

$email = $_GET["email"];
$bookingQuery = "SELECT * FROM `booking` WHERE email = '$email'";
$bookingResult = $conn->query($bookingQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(45deg, #FF6B6B, #FF8E53);
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: black;
            padding: 10px;
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
        }

        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-start;
        }

        .navbar ul li {
            margin-right: 20px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar ul li a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: 20px auto; /* Added margin to create space */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            color: #555;
        }

        p {
            text-align: center;
            color: #555;
        }

        button {
            background-color: #FF6B6B;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #FF8E53;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </div>
    <div class="container">
        <h2>Booking Details for <?php echo $email; ?></h2>
        <?php
        if ($bookingResult->num_rows > 0) {
            echo "<ul>";
            while ($row = $bookingResult->fetch_assoc()) {
                echo "<li>Name: " . $row["name"] . "</li>";
                echo "<li>Guests: " . $row["guests"] . "</li>";
                echo "<li>Room Number: " . $row["room_no"] . "</li>";
                echo "<li>Room Type: " . $row["room_type"] . "</li>";
                echo "<li>Total Price: " . $row["total_price"] . "</li>";
                echo "<li>Check-in Date: " . $row["checkin"] . "</li>";
                echo "<li>Check-out Date: " . $row["checkout"] . "</li>";
                echo "<li><button onclick=\"cancelBooking('" . $row["sno"] . "')\">Cancel Booking</button></li>";
                echo "<br>";
            }
            echo "</ul>";
        } else {
            echo "<p>No room booked with this email.</p>";
        }
        ?>
    </div>

    <script>
    function cancelBooking(sno) {
        if (confirm("Are you sure you want to cancel this booking?")) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        alert(xhr.responseText);
                        location.reload();
                    } else {
                        alert("Error: " + xhr.status + " " + xhr.statusText);
                    }
                }
            };
            xhr.send("sno=" + sno);
        }
    }
</script>

</body>
</html>

<?php
$conn->close();
?>

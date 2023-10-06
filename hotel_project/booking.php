<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $guests = $_POST['guests'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $roomType = $_POST['room-type'];
    $roomNumber = $_POST['room-number'];
    $totalPrice = $_POST['total-price'];

    
    $query = "INSERT INTO booking (`name`, `guests`, `checkin`, `checkout`, `room_type`, `room_no`, `total_price`)
              VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sissssi", $name, $guests, $checkin, $checkout, $roomType, $roomNumber, $totalPrice);

        if (mysqli_stmt_execute($stmt)) {
            echo "Booking successful";
        } else {
            echo "Booking unsuccessful: " . mysqli_error($con);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the statement: " . mysqli_error($con);
    }
} else {
    echo "Invalid request method.";
}

mysqli_close($con);
?>

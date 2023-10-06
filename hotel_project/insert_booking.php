<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "conn.php";

// ...

// ...

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $guests = $_POST['guests'];
    $checkin = $_POST['checkin']; 
    $checkout = $_POST['checkout'];
    $roomType = $_POST['room-type'];
    $roomNumber = $_POST['room-number'];

    // Calculate the number of days the guests are staying
    $checkinDate = new DateTime($checkin);
    $checkoutDate = new DateTime($checkout);
    $stayDuration = $checkinDate->diff($checkoutDate)->days;

    // Calculate the basic price based on room type and number of guests
    $basicPrice = 0;
    switch ($roomType) {
        case 'super-deluxe':
            $basicPrice = $guests * 2500; 
            break;
        case 'deluxe':
            $basicPrice = $guests * 2000; 
            break;
        case 'normal':
            $basicPrice = $guests * 1000; 
            break;
        default:
            break;
    }

    // Calculate the additional charge for guests exceeding 2
    $extraGuestCharge = ($guests > 2) ? ($guests - 2) * 300 : 0;

    // Calculate the total price
    $totalPrice = ($basicPrice + $extraGuestCharge) * $stayDuration;

    // Check room availability
    $availabilityQuery = "SELECT COUNT(*) FROM booking WHERE room_no = ? AND (checkin <= ? AND checkout >= ?)";
    $availabilityStmt = mysqli_prepare($con, $availabilityQuery);
    mysqli_stmt_bind_param($availabilityStmt, "iss", $roomNumber, $checkout, $checkin);
    mysqli_stmt_execute($availabilityStmt);
    mysqli_stmt_bind_result($availabilityStmt, $roomCount);
    mysqli_stmt_fetch($availabilityStmt);
    mysqli_stmt_close($availabilityStmt);

    if ($roomCount > 0) {
        $response = array("success" => false, "error" => "Room is already booked for the selected dates.");
        echo json_encode($response);
    } else {
        $query = "INSERT INTO booking (`name`, `email`, `guests`, `checkin`, `checkout`, `room_type`, `room_no`, `total_price`)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($con, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssissssi", $name, $email, $guests, $checkin, $checkout, $roomType, $roomNumber, $totalPrice); // Include the check-in date

            if (mysqli_stmt_execute($stmt)) {
                $bookingId = mysqli_insert_id($con);
                $response = array("success" => true, "bookingId" => $bookingId, "totalPrice" => $totalPrice);
                echo json_encode($response);
            } else {
                $response = array("success" => false, "error" => mysqli_error($con));
                echo json_encode($response);
            }

            mysqli_stmt_close($stmt);
        } else {
            $response = array("success" => false, "error" => mysqli_error($con));
            echo json_encode($response);
        }
    }
} else {
    $response = array("success" => false, "error" => "Invalid request method.");
    echo json_encode($response);
}

mysqli_close($con);

?>

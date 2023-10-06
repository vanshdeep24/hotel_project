<?php
include "conn.php"; 

if (isset($_GET['date'])) {
    $selectedDate = $_GET['date'];

    
    $selectedDate = mysqli_real_escape_string($con, $selectedDate);

    $query = "SELECT room_no FROM booking WHERE checkin <= '$selectedDate' AND checkout >= '$selectedDate'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $bookedRooms = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $bookedRooms[] = $row['room_no'];
        }
        echo json_encode($bookedRooms);
    } else {
        echo json_encode(array()); 
    }
}
?>

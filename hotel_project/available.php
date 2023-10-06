<!DOCTYPE html>
<html>
<head>
    <title>Room Booking</title>
    <link rel="stylesheet" href="style.css">
    <style>

         .booking-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        .room-type {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .rate {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .room-icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            border-radius: 50%;
            margin-right: 10px;
            font-size: 20px;
            line-height: 40px;
            position: relative;
            z-index: 2;
        }

        .room-number {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        body {
            background-color: #F8F8F8; 
            color: #333333; 
            margin: 0;
            padding: 0;
            position: relative;
        }

        video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.5; 
            z-index: 1; 
        }

        .calendar-icon {
            position: fixed;
            top: 70px;
            right: 50px;
            z-index: 2;
        }
.navbar {
            background-color: red;
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
    <video autoplay loop muted>
        <source src="background-video.mp4" type="video/mp4">
    </video>

    <div class="booking-container">
        <h2>Room Booking</h2>

        <div class="calendar-icon">
            <input type="date" id="check-in-date" min="2023-08-21" max="2023-12-31">
            <button id="check-availability-btn">Check Availability</button>
        </div>

        <div class="room-type">Super Deluxe Rooms</div>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<a href="new_booking.php"><div class="room-icon" id="room-' . $i . '"><span class="room-number">' . $i . '</span></div></a>';
        }
        ?>

        <div class="room-type">Deluxe Rooms</div>
        <?php
        for ($i = 11; $i <= 20; $i++) {
            echo '<a href="new_booking.php"><div class="room-icon" id="room-' . $i . '"><span class="room-number">' . $i . '</span></div></a>';
        }
        ?>

        <div class="room-type">Normal Rooms</div>
        <?php
        for ($i = 21; $i <= 30; $i++) {
            echo '<a href="new_booking.php"><div class="room-icon" id="room-' . $i . '"><span class="room-number">' . $i . '</span></div></a>';
        }
        ?>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const checkInDateInput = document.getElementById("check-in-date");
            const checkAvailabilityBtn = document.getElementById("check-availability-btn");
            const roomIcons = document.querySelectorAll(".room-icon");

            checkAvailabilityBtn.addEventListener("click", function () {
                const selectedDate = new Date(checkInDateInput.value);
                const year = selectedDate.getFullYear();
                const month = (selectedDate.getMonth() + 1).toString().padStart(2, "0");
                const day = selectedDate.getDate().toString().padStart(2, "0");
                const formattedDate = `${year}-${month}-${day}`;

                fetch("fetch_booked_rooms.php?date=" + formattedDate)
                    .then(response => response.json())
                    .then(bookedRooms => {
                        roomIcons.forEach(roomIcon => {
                            const roomNumber = roomIcon.querySelector(".room-number").textContent;
                            if (bookedRooms.includes(roomNumber)) {
                                roomIcon.style.backgroundColor = "red";
                            } else {
                                roomIcon.style.backgroundColor = "#4CAF50";
                            }
                        });
                    })
                    .catch(error => {
                        console.error("Error fetching booked rooms:", error);
                    });
            });
        });
    </script>
</body>
</html>

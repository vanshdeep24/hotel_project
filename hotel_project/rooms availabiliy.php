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
        }

        body {
            background-color: #333333; /* Dark background color */
            background-image: linear-gradient(45deg, #1a1a1a, #333333);
            background-size: cover;
            background-repeat: no-repeat;
            color: #ffffff; /* Text color */
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="booking-container">
        <h2>Room Booking</h2>

        <div class="room-type">Super Deluxe Rooms</div>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<div class="room-icon">SD ' . $i . '</div>';
        }
        ?>

        <div class="room-type">Deluxe Rooms</div>
        <?php
        for ($i = 11; $i <= 20; $i++) {
            echo '<div class="room-icon">DLX ' . $i . '</div>';
        }
        ?>

        <div class="room-type">Normal Rooms</div>
        <?php
        for ($i = 21; $i <= 30; $i++) {
            echo '<div class="room-icon">NRM ' . $i . '</div>';
        }
        ?>
    </div>
</body>
</html>

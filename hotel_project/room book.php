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

        .booking-form input[type="text"],
        .booking-form input[type="email"],
        .booking-form input[type="number"],
        .booking-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .booking-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="booking-container">
        <h2>Room Booking</h2>

        <div class="room-type">Super Deluxe Room</div>
        <div class="rate">Rate per night: $200</div>
        <form class="booking-form" action="book.php" method="POST">
            <input type="hidden" name="room_type" value="super_deluxe">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="num_of_nights" placeholder="Number of Nights" required>
            <button type="submit">Book Now</button>
        </form>

        <div class="room-type">Deluxe Room</div>
        <div class="rate">Rate per night: $150</div>
        <form class="booking-form" action="book.php" method="POST">
            <input type="hidden" name="room_type" value="deluxe">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="num_of_nights" placeholder="Number of Nights" required>
            <button type="submit">Book Now</button>
        </form>

        <div class="room-type">Normal Room</div>
        <div class="rate">Rate per night: $100</div>
        <form class="booking-form" action="book.php" method="POST">
            <input type="hidden" name="room_type" value="normal">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="num_of_nights" placeholder="Number of Nights" required>
            <button type="submit">Book Now</button>
        </form>
    </div>
</body>
</html>

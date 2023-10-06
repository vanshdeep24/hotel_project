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
        .booking-form input[type="date"],
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
    <script>
        function handleDateInputFocus(input) {
            if (!input.value) {
                input.type = 'text';
                input.value = 'yyyy-mm-dd';
            }
        }

        function handleDateInputBlur(input) {
            if (!input.value || input.value === 'yyyy-mm-dd') {
                input.type = 'date';
                input.value = '';
            }
        }
    </script>
</head>
<body>
    <div class="booking-container">
        <h2>Room Booking</h2>

        <div class="room-type">Super Deluxe Room</div>
        <div class="rate">Rate per night: Rs2000</div>
        <form class="booking-form" action="book.php" method="POST">
            <input type="hidden" name="room_type" value="super_deluxe">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="check_in_date" placeholder="Check-in Date" onfocus="handleDateInputFocus(this)" onblur="handleDateInputBlur(this)" required>
            <input type="text" name="check_out_date" placeholder="Check-out Date" onfocus="handleDateInputFocus(this)" onblur="handleDateInputBlur(this)" required>
            <button type="submit">Book Now</button>
        </form>

        <div class="room-type">Deluxe Room</div>
        <div class="rate">Rate per night: Rs1500</div>
        <form class="booking-form" action="book.php" method="POST">
            <input type="hidden" name="room_type" value="deluxe">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="check_in_date" placeholder="Check-in Date" onfocus="handleDateInputFocus(this)" onblur="handleDateInputBlur(this)" required>
            <input type="text" name="check_out_date" placeholder="Check-out Date" onfocus="handleDateInputFocus(this)" onblur="handleDateInputBlur(this)" required>
            <button type="submit">Book Now</button>
        </form>

        <div class="room-type">Normal Room</div>
        <div class="rate">Rate per night: Rs500</div>
        <form class="booking-form" action="book.php" method="POST">
            <input type="hidden" name="room_type" value="normal">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="check_in_date" placeholder="Check-in Date" onfocus="handleDateInputFocus(this)" onblur="handleDateInputBlur(this)" required>
            <input type="text" name="check_out_date" placeholder="Check-out Date" onfocus="handleDateInputFocus(this)" onblur="handleDateInputBlur(this)" required>
            <button type="submit">Book Now</button>
        </form>

        <!-- Hyperlink to the second page -->
        <a href="book.php">View All Rooms</a>
    </div>
</body>
</html>

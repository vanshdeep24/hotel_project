<!DOCTYPE html>
<html>
<head>
    <title>Room Booking</title>
    <style>
         body {
            background: linear-gradient(to bottom, #667eea, #764ba2);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .booking-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s;
        }

        .booking-form label {
            display: block;
            margin-bottom: 10px;
        }

        .booking-form input,
        .booking-form select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
              .booking-form button {
            padding: 10px 20px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .booking-form button:hover {
            background-color: darkred;
        }

        .note {
            margin-top: 20px;
            font-style: italic;
            text-align: center;
            animation: slideIn 0.5s;
        }

       
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
           @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
          /* New styles for the price panel */
        .price-panel {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            flex-basis: 30%; /* Adjust the width as needed */
        }

        .price-panel h3 {
            text-align: center;
        }

        .price-list {
            list-style: none;
            padding: 0;
        }

        .price-list li {
            margin-bottom: 10px;
        }
        /* Navbar styles */
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

/* Rest of your page styles */

body {
    background: linear-gradient(to bottom, #667eea, #764ba2);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    color: #333333;
    margin: 0;
    padding: 0;
    position: relative;
}

.booking-form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    animation: fadeIn 0.5s;
}

/* Rest of your CSS styles... */

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
    <div class="booking-form">
        <h2>Room Booking</h2>
        <form action="insert_booking.php" method="POST">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" required>

            <label for="checkin">Check-in Date:</label>
            <input type="date" id="checkin" name="checkin" required>

            <label for="checkout">Checkout Date:</label>
            <input type="date" id="checkout" name="checkout" required>

            <label for="room-type">Room Type:</label>
            <select id="room-type" name="room-type" required>
                <option value="">Select a room type</option>
                <option value="super-deluxe">Super Deluxe Room</option>
                <option value="deluxe">Deluxe Room</option>
                <option value="normal">Normal Room</option>
            </select>

            <label for="room-number">Room Number:</label>
            <select id="room-number" name="room-number" required>
                <option value="">Select a room number</option>
            </select>

            <label for="total-price">Total Price:</label>
            <input type="text" id="total-price" name="total-price" readonly>

            <button type="submit" id="book-button">Book Now</button>
        </form>
        <div class="note"></div>
    </div>

      <!-- Price panel on the right side -->
        <div class="price-panel">
            <h3>Room Prices</h3>
            <ul class="price-list">
                <li><strong>Super Deluxe Room:</strong>₹2500 per day</li>
                <li><strong>Deluxe Room:</strong> ₹2000 per day</li>
                <li><strong>Normal Room:</strong> ₹1000 per day</li>
            </ul>
            <p><strong>Conditions:</strong></p>
            <ul class="price-list">
                <li>Up to 2 guests included in the base price.</li>
                <li>₹300 extra charge per additional guest per day.</li>
            </ul>
        </div>
    </div>

    <script>
        const form = document.querySelector('form');
        const roomTypeSelect = document.getElementById('room-type');
        const roomNumberSelect = document.getElementById('room-number');
        const totalPriceInput = document.getElementById('total-price');
        const note = document.querySelector('.note');

        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Perform an AJAX request to submit the form data
            const formData = new FormData(form);
            fetch('insert_booking.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    totalPriceInput.value = data.totalPrice;
                    note.textContent = 'Booking successful. Booking ID: ' + data.bookingId;
                } else {
                    note.textContent = 'Booking unsuccessful: ' + data.error;
                }
            })
            .catch(error => {
                note.textContent = 'An error occurred: ' + error.message;
            });
        });

        roomTypeSelect.addEventListener('change', () => {
            // Your existing room number logic (update room numbers based on room type)...
            const selectedRoomType = roomTypeSelect.value;
            const availableRoomNumbers = [];

            switch (selectedRoomType) {
                case 'super-deluxe':
                    for (let i = 1; i <= 10; i++) {
                        availableRoomNumbers.push(i);
                    }
                    break;
                case 'deluxe':
                    for (let i = 11; i <= 20; i++) {
                        availableRoomNumbers.push(i);
                    }
                    break;
                case 'normal':
                    for (let i = 21; i <= 30; i++) {
                        availableRoomNumbers.push(i);
                    }
                    break;
                default:
                    break;
            }

            roomNumberSelect.innerHTML = '';
            availableRoomNumbers.forEach(number => {
                const option = document.createElement('option');
                option.value = number;
                option.textContent = number;
                roomNumberSelect.appendChild(option);
            });
        });

        // Placeholder logic for price calculation (customize as needed)
form.addEventListener('change', () => {
    const guests = parseInt(document.getElementById('guests').value);
    const checkin = new Date(document.getElementById('checkin').value);
    const checkout = new Date(document.getElementById('checkout').value);

    if (!isNaN(guests) && !isNaN(checkin.getTime()) && !isNaN(checkout.getTime())) {
        const roomType = roomTypeSelect.value;
        
        // Placeholder price calculation logic
        let totalPrice = 0;
        const oneDay = 24 * 60 * 60 * 1000; // Number of milliseconds in a day
        const numDays = Math.round(Math.abs((checkout - checkin) / oneDay));

        switch (roomType) {
            case 'super-deluxe':
                totalPrice = (guests * 2500 * numDays);
                break;
            case 'deluxe':
                totalPrice = (guests * 2000 * numDays);
                break;
            case 'normal':
                totalPrice = (guests * 1000 * numDays);
                break;
            default:
                break;
        }

        // Additional charge for more than 2 guests
        if (guests > 2) {
            const extraGuestCharge = 300 * (guests - 2) * numDays;
            totalPrice += extraGuestCharge;
        }

        totalPriceInput.value = totalPrice.toFixed(2);
    }
});

    </script>
</body>
</html>

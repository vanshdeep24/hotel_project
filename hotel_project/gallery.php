<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .navbar {
            background-color: red;
            padding: 10px;
            margin-bottom: 20px;
             position: sticky;
            top: 0;
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

        
        .gallery-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .gallery-section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .gallery-item {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            width: 300px;
            background-color: #f1f1f1;
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .gallery-item:hover .overlay {
            background-color: red;
        }

        .gallery-item img {
            max-height: 100%;
            max-width: 100%;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 30px;
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .zoomed-image {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .zoomed-image img {
            max-height: 90%;
            max-width: 90%;
            object-fit: contain;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            justify-content: center;
            align-items: center;
        }
        .footer-stripe {
            background-color: red;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }

        .footer-stripe a {
            color: white;
            text-decoration: none;
            font-weight: bold;
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
    <br>
    <div class="gallery-container">
        <div class="gallery-section">
            <h2 class="section-title">Super Deluxe Room</h2>
            <div class="gallery">
                <div class="gallery-item" onclick="zoomImage('ng1.png')">
                    <img src="ng1.png" alt="Super Deluxe Room">
                    <div class="overlay">Exterior View</div>
                </div>
                <!-- Add more super deluxe room gallery items as needed -->
                
                <div class="gallery-item" onclick="zoomImage('ng2.png')">
                    <img src="ng2.png" alt="Super Deluxe Room">
                    <div class="overlay">Lobby</div>
                </div>

                <div class="gallery-item" onclick="zoomImage('ng3.png')">
                    <img src="ng3.png" alt="Super Deluxe Room">
                    <div class="overlay">Deluxe Garden View Room</div>
                </div>

            </div>
        </div>

        <div class="gallery-section">
            <h2 class="section-title">Deluxe Room</h2>
            <div class="gallery">
                <div class="gallery-item" onclick="zoomImage('ng4.png')">
                    <img src="ng4.png" alt="Deluxe Room">
                    <div class="overlay">Deluxe Pool View Room</div>
                </div>
                <div class="gallery-item" onclick="zoomImage('ng5.png')">
                    <img src="ng5.png" alt="Deluxe Room">
                    <div class="overlay">Suite</div>
                </div>
                <div class="gallery-item" onclick="zoomImage('ng6.png')">
                    <img src="ng6.png" alt="Deluxe Room">
                    <div class="overlay">The Restaurant</div>
                </div>
            </div>
        </div>
        <div class="gallery-section">
            <h2 class="section-title">Normal Room</h2>
            <div class="gallery">
                <div class="gallery-item" onclick="zoomImage('ng7.png')">
                    <img src="ng7.png" alt="Normal Room">
                    <div class="overlay">The Bar</div>
                </div>
                <div class="gallery-item" onclick="zoomImage('ng8.png')">
                    <img src="ng8.png" alt="Normal Room">
                    <div class="overlay">Swimming Pool</div>
                </div>
                <div class="gallery-item" onclick="zoomImage('ng9.png')">
                    <img src="ng9.png" alt="Normal Room">
                    <div class="overlay">Gym</div>
                </div>
            </div>
        </div>
    </div>
    <div class="zoomed-image" id="zoomed-image-container">
        <img id="zoomed-image" src="" alt="">
    </div>
    <div class="footer-stripe">
        <a href="new_booking.php">Click here to book a room</a>
    </div>

    <script>
        function zoomImage(imageUrl) {
            const zoomedImageContainer = document.getElementById('zoomed-image-container');
            const zoomedImage = document.getElementById('zoomed-image');

            zoomedImage.src = imageUrl;
            zoomedImageContainer.style.display = 'flex';
        }

        document.getElementById('zoomed-image-container').addEventListener('click', function() {
            this.style.display = 'none';
        });
    </script>
</body>
</html>

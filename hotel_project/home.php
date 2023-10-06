<!DOCTYPE html>
<html>
<head>
    <title>Trident Hotel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

        .header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px; /* Adjust the padding as needed */
    text-align: center;
    font-size: 24px; /* Adjust the font size as needed */
    font-weight: bold;
    height: 50px; /* Adjust the height as needed */
}

        .header span {
    font-size: 18px; /* Adjust the font size as needed */
    padding: 5px; /* Adjust the padding as needed */
}



        .navbar {
            background-color: red;
        }

        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: #ddd;
        }
        .sticky-navbar {
            position: sticky;
            top: 0;
            background-color: red; /* Set your desired background color */
            z-index: 100; /* Adjust the z-index as needed */
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .testimonial-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .testimonial {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 30%;
            padding: 20px;
            box-sizing: border-box;
        }

        .testimonial img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .testimonial p {
            margin-top: 10px;
            font-size: 14px;
            line-height: 1.4;
        }

        .testimonial-author {
            font-weight: bold;
            margin-top: 5px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            margin-top: auto; 
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .social-icons a {
            margin-right: 10px;
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
        .navbar a {
    font-size: 16px; /* Adjust the font size as needed */
    padding: 10px 12px; /* Adjust the padding as needed */
}
#carouselExample {
    height: calc(100vh - 70px); /* Adjust 70px according to your header's height and padding */
}

.carousel-item img {
    height: 100%; /* Make the images occupy the full height of the carousel */
}
.carousel-item img {
    height: 100vh !important; /* Make the images occupy the full height of the viewport */
}
.booking-section {
    background-color: #fff; /* Add your desired background color */
    padding: 20px; /* Add padding as needed */
    z-index: 98; /* Adjust the z-index as needed to place it between the navbar and sticky navbar */
}


    </style>
</head>
<body>
    <header class="header">
        <span>Trident Hotel</span>
    </header>

    <div class="navbar sticky-navbar">
        <a href="home.php">Home</a>
        <div class="dropdown">
            <a href="#" class="dropbtn">More</a>
            <div class="dropdown-content">
                <a href="signup.php">Signup</a>
                <a href="available.php">Availability</a>
                <a href="login.php">Login</a>
            </div>
        </div>
        <a href="gallery.php">Gallery</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </div>
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="slide1.jpg" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="slide4.jpg" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="slide3.jpg" class="d-block w-100" alt="Image 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="testimonial-container">
        <div class="testimonial">
            <img src="photo1.jpg" alt="Testimonial 1">
            <p>I cannot say enough good things about Hotel Trident. The entire experience was simply outstanding.</p>
            <span class="testimonial-author">John Doe</span>
        </div>
        <div class="testimonial">
            <img src="photo2.jpg" alt="Testimonial 2">
            <p>My recent stay at Hotel Trident exceeded all my expectations. From the moment I stepped into the hotel, I was greeted with warmth and hospitality.</p>
            <span class="testimonial-author">Jane Smith</span>
        </div>
        <div class="testimonial">
            <img src="photo3.jpg" alt="Testimonial 3">
            <p>I had the most amazing stay at Hotel Trident! The staff was incredibly friendly and attentive to all my needs.</p>
            <span class="testimonial-author">Mike Johnson</span>
        </div>
    </div>
    <div class="footer-stripe">
        <a href="new_booking.php">Click here to book a room</a>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2023 Hotel Trident. All rights reserved.</p>
            <div class="social-icons">
                <a href="https://www.google.com"><img src="logo3.png" alt="Google" height="20px"></a>
                <a href="https://www.facebook.com"><img src="logo1.png" alt="Facebook" height="20px"></a>
                <a href="https://www.instagram.com"><img src="logo2.jpg" alt="Instagram" height="20px"></a>
                <a href="https://www.twitter.com"><img src="logo4.png" alt="Twitter" height="20px"></a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

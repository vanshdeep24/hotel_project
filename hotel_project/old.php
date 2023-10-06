<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navbar {
            background-color: red;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 17px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: #555;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-content', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-content', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
</head>
<body>
<div class="uper">
    <b>
        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn">Home
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="signup.php">SIGN UP</a>
                    <a href="available.php">AVAILABILITY</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
            <a href="gallery.php">Gallery</a>
            <a href="#">Contact</a>
            <a href="about.php">About</a>
        </div>
    </b>
</div>

<br>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <!-- Carousel content here -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slide3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slide4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="testimonial-container">
  <!-- Testimonials content here -->
  <h2>Testimonials</h2>
    <div class="testimonial">
        <img src="photo1.jpg" alt="Testimonial 1">
        <p>I cannot say enough good things about Hotel Trident. The entire experience was simply outstanding. The hotel's ambiance was elegant and sophisticated, creating a truly relaxing environment. The staff was incredibly professional and always ready to assist with a smile. The facilities were excellent, including the state-of-the-art gym and spa. The attention to detail in every aspect of the hotel, from the decor to the amenities, was impeccable. If you're looking for a luxurious and impeccable hotel experience, look no further than Hotel Trident</p>
        <span class="testimonial-author">John Doe</span>
    </div>
    <div class="testimonial">
        <img src="photo2.jpg" alt="Testimonial 2">
        <p>My recent stay at Hotel Trident exceeded all my expectations. From the moment I stepped into the hotel, I was greeted with warmth and hospitality. The room was luxurious, with a comfortable bed and stunning views. The hotel's attention to detail was exceptional, and every little aspect was taken care of. The staff went above and beyond to make my stay memorable, and I truly felt like a valued guest. I can't wait to return to Hotel Trident on my next visit</p>
        <span class="testimonial-author">Jane Smith</span>
    </div>
    <div class="testimonial">
        <img src="photo3.jpg" alt="Testimonial 3">
        <p>I had the most amazing stay at Hotel Trident! The staff was incredibly friendly and attentive to all my needs. The rooms were spacious, clean, and beautifully decorated. The hotel's location was perfect, with breathtaking views of the city skyline. The amenities were top-notch, and the food at the on-site restaurant was delicious. I highly recommend Hotel Trident for anyone looking for a luxurious and memorable hotel experience.</p>
        <span class="testimonial-author">Mike Johnson</span>
    </div>
</div>

<footer>
  <!-- Footer content here -->
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

</body>
</html>

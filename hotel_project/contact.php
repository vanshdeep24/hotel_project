<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            padding-top: 50px;
        }

        .contact-card {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .contact-card img {
            max-width: 200px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .contact-card h2 {
            margin-bottom: 5px;
        }

        .contact-card p {
            margin-bottom: 15px;
        }

        .contact-card .contact-info {
            text-align: left;
        }

        .contact-card .contact-info p {
            margin-bottom: 5px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        }

        .uper {
            height: 50px; /* Adjust the height as needed */
        }

        .uper ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: red;
        }

        .uper li {
            float: left;
        }

        .uper li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .uper li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>
    <div class="uper sticky">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </div>
    <div class="contact-card">
        <img src="vansh.jpg" alt="Hotel Founder">
        <h2>Hotel Owner</h2>
        <p>Vanshdeep Singh</p>
        <div class="contact-info">
            <p>Contact Number: <a href="tel:+123456789">+123456789</a></p>
        </div>
    </div>

    <div class="contact-card">
        <img src="laxman.jpg" alt="Hotel Manager">
        <h2>Hotel Manager</h2>
        <p>Laxman Fulwariya</p>
        <div class="contact-info">
            <p>Contact Number: <a href="tel:+987654321">+987654321</a></p>
        </div>
    </div>

    <div class="contact-card">
        <img src="Vinod.jpg" alt="Staff Complaint Executive">
        <h2>Staff Complaint Executive</h2>
        <p>Vinod Redas</p>
        <div class="contact-info">
            <p>Contact Number: <a href="tel:+567891234">+567891234</a></p>
        </div>
    </div>

    <div class="contact-card">
        <img src="security-incharge.jpg" alt="Security Incharge">
        <h2>Security Incharge</h2>
        <p>Sumit Meghvanshi</p>
        <div class="contact-info">
            <p>Contact Number: <a href="tel:+234567890">+234567890</a></p>
        </div>
    </div>
</body>
</html>

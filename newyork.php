<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New York | Travel Website</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/newyork.css">
</head>

<body>

    <!-- Header section -->
    <section class="header">
        <a href="home.php" class="logo">Travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- New York Page Heading -->
    <div class="heading" style="background:url(image/newyorkbg.jpeg) no-repeat">
        <h1>New York City</h1>
    </div>

    <!-- New York Content Section -->
    <section class="content">
        <h2>About New York</h2>
        <p>Explore the vibrant city of New York, renowned for its iconic landmarks, world-class cuisine, and vibrant nightlife.</p>

        <!-- Add points of interest in New York -->
        <div class="places">
            <div class="place">
                <img src="image/Statue of Liberty.jpeg" alt="Statue of Liberty">
                <h3>Statue of Liberty</h3>
                <p>A symbol of freedom and democracy, the Statue of Liberty is one of New York's most famous landmarks.</p>
            </div>
            <div class="place">
                <img src="image/times.jpeg" alt="Times Square">
                <h3>Times Square</h3>
                <p>The vibrant heart of New York, known for its bright lights, Broadway shows, and New Year's Eve celebrations.</p>
            </div>
            <div class="place">
                <img src="image/Central Park.jpeg" alt="Central Park">
                <h3>Central Park</h3>
                <p>An urban oasis offering scenic beauty, picnic spots, and a variety of outdoor activities.</p>
            </div>
            <!-- Add more places as needed -->
        </div>
    </section>

    <!-- Hotels in New York -->
    <section class="hotels">
        <h2>Hotels in New York</h2>
        <div class="hotel">
            <img src="image/hotel1.jpeg" alt="Luxury Hotel">
            <h3>The Plaza Hotel</h3>
            <p>Starting at $550 per night. A luxurious stay with iconic views of Central Park.</p>
        </div>
        <div class="hotel">
            <img src="image/hotel2.jpeg" alt="Budget Hotel">
            <h3>Pod Times Square</h3>
            <p>Starting at $150 per night. Perfect for budget-friendly travelers.</p>
        </div>
        <div class="hotel">
            <img src="image/hotel3.jpeg" alt="Family Hotel">
            <h3>Hilton Garden Inn</h3>
            <p>Starting at $250 per night. Ideal for families and groups.</p>

        </div>
    </section>

    <div class="btn-container">
        <a href="book.php" class="btn">Book Now</a>
    </div>






    <!-- Footer Section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Question</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"><i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
                <a href="#"><i class="fas fa-map"></i> Mumbai, India 400104 </a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook </a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter </a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram </a>
                <a href="#"><i class="fab fa-linkedin"></i> LinkedIn </a>
            </div>
        </div>
    </section>




    <!-- JS files -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
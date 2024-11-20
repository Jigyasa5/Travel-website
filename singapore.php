<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singapore | Travel Website</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/singapore.css">
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

    <!-- Singapore Page Heading -->
    <div class="heading" style="background:url(image/SINGAPOREbg.jpeg) no-repeat">
        <h1>Singapore</h1>
    </div>

    <!-- Singapore Content Section -->
    <section class="content">
        <h2>About Singapore</h2>
        <p>Explore Singapore, a city-state known for its futuristic skyline, lush greenery, and vibrant culture.</p>

        <!-- Add points of interest in Singapore -->
        <div class="places">
            <div class="place">
                <img src="image/mariana.jpeg" alt="Marina Bay Sands">
                <h3>Marina Bay Sands</h3>
                <p>An architectural marvel featuring an infinity pool, luxury shopping, and stunning views of the skyline.</p>
            </div>
            <div class="place">
                <img src="image/Gardens by the Bay.jpeg" alt="Gardens by the Bay">
                <h3>Gardens by the Bay</h3>
                <p>A futuristic garden with towering Supertrees, unique plant displays, and a spectacular light show.</p>
            </div>
            <div class="place">
                <img src="image/SentosaIsland.jpeg" alt="Sentosa Island">
                <h3>Sentosa Island</h3>
                <p>A resort island offering beaches, adventure parks, and attractions like Universal Studios Singapore.</p>
            </div>
            <!-- Add more places as needed -->
        </div>
    </section>

    <!-- Hotels in Singapore -->
    <section class="hotels">
        <h2>Hotels in Singapore</h2>
        <div class="hotel">
            <img src="image/Raffles Hotel Singapore.jpeg" alt="Luxury Hotel">
            <h3>Raffles Hotel Singapore</h3>
            <p>Starting at SGD 800 per night. A historic luxury hotel with colonial charm.</p>
        </div>
        <div class="hotel">
            <img src="image/hotel81.jpeg" alt="Budget Hotel">
            <h3>Hotel 81</h3>
            <p>Starting at SGD 100 per night. A budget-friendly option in the heart of the city.</p>
        </div>
        <div class="hotel">
            <img src="image/PARKROYAL COLLECTION Marina Bay.jpeg" alt="Family Hotel">
            <h3>Parkroyal Collection Marina Bay</h3>
            <p>Starting at SGD 300 per night. A perfect choice for families and groups.</p>
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
                <a href="#"><i class="fas fa-phone"></i> +65-1234-5678 </a>
                <a href="#"><i class="fas fa-phone"></i> +65-9876-5432 </a>
                <a href="#"><i class="fas fa-envelope"></i> singaporetravel@gmail.com </a>
                <a href="#"><i class="fas fa-map"></i> Singapore </a>
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

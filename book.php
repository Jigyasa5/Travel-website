<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header section starts -->
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
    <!-- Header section ends -->

    <div class="heading" style="background:url(image/background-2.png) no-repeat">
        <h1>Book Now</h1>
    </div>

   <!-------------------------Booking section----------------------->
<section class="booking">
    <h1 class="heading-title">Book your Trip! </h1>
    <form action="book_form.php" method="POST" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>e-mail:</span>
                <input type="text" placeholder="Enter your e-mail" name="email">
            </div>
            <div class="inputBox">
                <span>phone:</span>
                <input type="number" placeholder="Enter your phone number" name="phone">
            </div>
            <div class="inputBox">
                <span>address:</span>
                <input type="text" placeholder="Enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to:</span>
                <input type="text" placeholder="Place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many:</span>
                <input type="number" placeholder="Number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals:</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving:</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <!-- Payment Information -->
        <div class="payment-info">
            <h2>Payment Information</h2>
            <div class="inputBox">
                <span>Name on Card:</span>
                <input type="text" placeholder="Enter name on card" name="card_name" required>
            </div>
            <div class="inputBox">
                <span>Card Number:</span>
                <input type="text" placeholder="Enter card number" name="card_number" maxlength="16" required>
            </div>
            <div class="inputBox">
                <span>Expiration Date:</span>
                <input type="month" name="expiry_date" required>
            </div>
            <div class="inputBox">
                <span>CVV:</span>
                <input type="text" placeholder="Enter CVV" name="cvv" maxlength="3" required>
            </div>
        </div>
        <input type="submit" value="Submit and Pay" class="btn" name="send">
    </form>

    <div id="confirmationMessage" style="display: none; text-align: center; font-size: 1.5rem; color: green;">
        Your booking is confirmed! Thank you for choosing us.
    </div>
</section>




    <!-----------------------Footer Section------------- -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask question</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> mumbai, india 400104 </a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>
        </div>
    </section>

    <!-- JS files -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script123.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>

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

        <div class="search-container">
            <input type="text" id="searchBar" placeholder="Search destinations..." />
            <button id="searchBtn" class="search-btn"><i class="fas fa-search"></i></button>
        </div>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header section ends -->

    <div class="heading" style="background:url(image/package.jpg) no-repeat">
        <h1>Packages</h1>
    </div>

    <!-- Budget Filter Section -->
    <div class="budget-filter">
        <h2>Select Your Budget</h2>
        <label for="budgetRange">Max Budget: $</label>
        <input type="number" id="budgetRange" placeholder="Enter your budget" min="1" />
        <button id="filterBtn">Filter</button>
    </div>
<!-------------------------------packages section--------------------------->

    <section class="packages">
        <h1 class="Heading-title">Top destinations</h1>
        <div class="box-container">
            <div class="box" data-price="500">
                <div class="image">
                    <img src="image/japan.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Japan</h3>
                    <p>A harmonious fusion of tradition and cutting-edge technology</p>
                    <p class="price">$500</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box"data-price="400">
                <div class="image">
                    <img src="image/canada.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Canada</h3>
                    <p>A vast land of breathtaking landscapes and multicultural charm</p>
                    <p class="price">$400</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box" data-price="550">
                <div class="image">
                    <img src="image/brazil.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Brazil</h3>
                    <p>A lively country full of rich culture, music, and natural wonders.</p>
                    <p class="price">$550</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box" data-price="600">
                <div class="image">
                    <img src="image/france.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>France</h3>
                    <p>A romantic haven famed for its art, fashion, and exquisite cuisine.</p>
                    <p class="price">$600</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box" data-price="650">
                <div class="image">
                    <img src="image/italy.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Italy</h3>
                    <p>A treasure trove of ancient history, stunning architecture, and mouthwatering food.</p>
                    <p class="price">$650</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box" data-price="750">
                <div class="image">
                    <img src="image/MOST BEAUTIFUL PLACES IN GERMANY.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Germany</h3>
                    <p>A country blending historical landmarks with modern innovation.</p>
                    <p class="price">$750</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box" data-price="550">
                <div class="image">
                    <img src="image/india.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>India</h3>
                    <p>A vibrant land of diverse cultures, traditions, and spiritual heritage.</p>
                    <p class="price">$550</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box" data-price="590">
                <div class="image">
                    <img src="image/mexico.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Mexico</h3>
                    <p>A colorful mix of ancient ruins, delicious cuisine, and festive spirit.</p>
                    <p class="price">$590</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box" data-price="850">
                <div class="image">
                    <img src="image/egypt.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Egypt</h3>
                    <p>Home to ancient wonders like the Pyramids and a captivating desert landscape</p>
                    <p class="price">$850</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box" data-price="690">
                <div class="image">
                    <img src="image/spain.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Spain</h3>
                    <p>Known for its passionate culture, lively festivals, and Mediterranean beauty.</p>
                    <p class="price">$690</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box" data-price="850">
                <div class="image">
                    <img src="image/switzerland.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Switzerland</h3>
                    <p>Famed for its breathtaking Alps, luxury watches, and peaceful landscapes.</p>
                    <p class="price">$850</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box" data-price="850">
                <div class="image">
                    <img src="image/Thailand.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Thailand</h3>
                    <p>A paradise of pristine beaches, vibrant cities, and rich cultural heritage.</p>
                    <p class="price">$850</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            
            
            
        </div>
    </section>
    <!-- Footer Section -->
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
    <script>
        // JS code here...
        // Wait for the DOM content to fully load
document.addEventListener('DOMContentLoaded', () => {
    // Get references to the budget input and filter button
    const filterBtn = document.getElementById('filterBtn');
    const budgetRangeInput = document.getElementById('budgetRange');

    // Add event listener to the filter button
    filterBtn.addEventListener('click', () => {
        // Get the entered budget
        const maxBudget = parseInt(budgetRangeInput.value);

        // Check if the entered budget is a valid number
        if (isNaN(maxBudget) || maxBudget <= 0) {
            alert("Please enter a valid budget.");
            return; // Stop further execution if the budget is not valid
        }

        // Get all the package boxes
        const packageBoxes = document.querySelectorAll('.packages .box');

        // Loop through each package box
        packageBoxes.forEach(box => {
            // Get the price of the current package from the data-price attribute
            const price = parseInt(box.getAttribute('data-price'));

            // Show or hide the box based on the price
            if (price > maxBudget) {
                box.style.display = 'none'; // Hide the package if the price exceeds the budget
            } else {
                box.style.display = 'block'; // Show the package if the price is within the budget
            }
        });
    });
});

    </script>
</body>

</html>
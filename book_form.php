


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $location = htmlspecialchars($_POST['location']);
    $guests = intval($_POST['guests']);
    $arrivals = htmlspecialchars($_POST['arrivals']);
    $leaving = htmlspecialchars($_POST['leaving']);

    // Payment information
    $card_name = htmlspecialchars($_POST['card_name']);
    $card_number = htmlspecialchars($_POST['card_number']);
    $expiry_date = htmlspecialchars($_POST['expiry_date']);
    $cvv = htmlspecialchars($_POST['cvv']);

    // Basic input validation
    if (empty($name) || empty($email) || empty($phone) || empty($location) || empty($card_name) || empty($card_number) || empty($expiry_date) || empty($cvv)) {
        echo '<div style="color: red; text-align: center;">Please fill in all required fields.</div>';
        exit;
    }

    // Simulate payment processing (replace with a payment gateway integration in a real system)
    if (strlen($card_number) == 4 && strlen($cvv) == 3) {
        // Payment successful (simulated)
        echo '<div style="color: green; text-align: center;">Your booking is confirmed! Thank you for choosing us.</div>';

        // Save booking details to a database (example code, replace with actual DB logic)
        // $conn = new mysqli('localhost', 'username', 'password', 'database');
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }
        // $sql = "INSERT INTO bookings (name, email, phone, address, location, guests, arrivals, leaving, card_name, card_number, expiry_date, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        // $stmt = $conn->prepare($sql);
        // $stmt->bind_param("sssssiisssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving, $card_name, $card_number, $expiry_date, $cvv);
        // $stmt->execute();
        // $stmt->close();
        // $conn->close();

    } else {
        // Payment failed
        echo '<div style="color: red; text-align: center;">Invalid payment details. Please try again.</div>';
    }
} else {
    echo '<div style="color: red; text-align: center;">Invalid request method.</div>';
}
?>
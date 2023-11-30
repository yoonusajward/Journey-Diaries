<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $checkIn = $_POST["check-in"];
    $checkOut = $_POST["check-out"];

    // Perform database connection and insertion (Replace with your database details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "paypage";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert booking details into the database
    $sql = "INSERT INTO bookings (name, email, check_in, check_out) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $checkIn, $checkOut);

    if ($stmt->execute()) {
        // Booking was successful
        $bookingId = $stmt->insert_id;
        $conn->close();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Booking Confirmation</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container mt-5">
                <h1 class="text-center">Booking Confirmation</h1>
                <p class="text-center">Thank you for your booking!</p>
                <p class="text-center">Your booking ID is: <?php echo $bookingId; ?></p>
            </div>

            <div class="text-center">
                <a href="/payment/index.php" class="btn btn-primary mx-auto" style="width: 200px;">Pay Now</a>
            </div>



        </body>
        </html>
        <?php
    } else {
        // Booking failed
        echo "Booking failed. Please try again later.";
    }
} else {
    // If the form wasn't submitted, redirect to the booking page
    header("Location: index.html");
    exit();
}
?>

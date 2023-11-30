<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkInDate = $_POST["checkInDate"];
    $checkOutDate = $_POST["checkOutDate"];
    $roomType = $_POST["roomType"];
    $guests = $_POST["guests"];
    
    // You can process the booking here, e.g., save it to a database
    
    // Display a confirmation message
    $confirmationMessage = "Booking confirmed! You have booked a $roomType room for $guests guests from $checkInDate to $checkOutDate.";
}
?>

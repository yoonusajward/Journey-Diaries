$(document).ready(function () {
    $("#bookingForm").submit(function (event) {
        event.preventDefault();

        var checkInDate = $("#checkInDate").val();
        var checkOutDate = $("#checkOutDate").val();
        var roomType = $("#roomType").val();
        var guests = $("#guests").val();

        // You can add additional validation here

        // If validation is successful, submit the form to PHP
        $.post("process_booking.php", { checkInDate: checkInDate, checkOutDate: checkOutDate, roomType: roomType, guests: guests }, function (data) {
            // Handle the response from PHP, e.g., show a confirmation message
            alert("Booking confirmed! Thank you.");
            window.location.href = "confirmation.php";
        });
    });
});

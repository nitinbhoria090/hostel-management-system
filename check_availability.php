<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkInDate = $_POST["checkInDate"];
    $checkOutDate = $_POST["checkOutDate"];

    // Your database connection code here

    // Sample function to check room availability (replace with your actual implementation)
    function checkRoomAvailability($checkInDate, $checkOutDate) {
        // Simulated database query
        // Assume room is  if check-in date is before 2024-06-01 and check-out date is after 2024-06-05
        if ($checkInDate < '06-01-2024' && $checkOutDate > '01-01-2024') {
            return true; // Room available
        } else {
            return false; // Room not available
        }
    }

    // Call the function to check room availability
    if (checkRoomAvailability($checkInDate, $checkOutDate)) {
        $message = "Room is available for the selected dates.";
    } else {
        $message = "Sorry, the room is not available for the selected dates.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Availability Result</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h2>Availability Result</h2>
        <?php if(isset($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
        <a href="index.php">Back to Check Availability</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Availability Checker</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="box">
     <div class="container">
        <h2>Check Room Availability</h2>
       <form action="check_availability.php" method="post">
        <div class="input-field">
            <label for="checkInDate">Check-in Date:</label>
            <input type="date" id="checkInDate" name="checkInDate" required>
        </div>
        <div class="input-field">

            <label for="checkOutDate">Check-out Date:</label>
            <input type="date" id="checkOutDate" name="checkOutDate" required>
        </div>
        <div class="input-field">
            <button type="submit">Check Availability</button>
        </div>
     </div>
    </form>
    </div>
</body>
</html>

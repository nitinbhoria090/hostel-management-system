
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Change Request</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="box">
     <div class="container">
        <h2>Room Change Request</h2>
        <form action="room_change_process.php" method="POST">
            <div class="input-field">
                <label for="student_name">Student Name:</label>
                <input type="text" id="student_name" name="student_name" required>
            </div>
            <div class="input-field">
                <label for="current_room">Current Room:</label>
                <input type="text" id="current_room" name="current_room" required>
            </div>
            <div class="input-field">
                <label for="new_room">New Room:</label>
                <input type="text" id="new_room" name="new_room" required>
            </div>
            <div class="submit">
            <button type="submit">Submit Request</button>
        </div>
        </form>
     </div>
    </div>
</body>
</html>

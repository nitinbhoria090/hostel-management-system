<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment Gateway</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="box">
     <div class="container">
        <h2>Online Payment Gateway</h2>
        <form action="payment_process.php" method="POST">
        <div class="input-field">
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number" required>
        </div>
        <div class="input-field">
            <label for="expiry_date">Expiry Date:</label>
            <input type="text" id="expiry_date" name="expiry_date" required>
        </div>
        <div class="input-field">
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
        </div>
        <div class="input-field">
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required>
        </div>
            <button type="submit">Pay Now</button>
        </form>
     </div>
    </div>
</body>
</html>

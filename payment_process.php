<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST["card_number"];
    $expiry_date = $_POST["expiry_date"];
    $cvv = $_POST["cvv"];
    $amount = $_POST["amount"];

    // Here you would typically integrate with a payment gateway API to process the payment
    // For example, you can use Stripe, PayPal, etc.

    // For simplicity, let's just echo the payment details
    echo "Payment Details:<br>";
    echo "Card Number: $card_number<br>";
    echo "Expiry Date: $expiry_date<br>";
    echo "CVV: $cvv<br>";
    echo "Amount: $amount<br>";
} else {
    // If the form is not submitted via POST method, redirect the user back to the form page
    header("Location: payment.php");
    exit;
}
?>

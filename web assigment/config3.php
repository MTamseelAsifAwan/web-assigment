<?php
// Establish connection to the MySQL database

$servername = "localhost";
$username = "root";
$password = "tamseel@911";
$dbname = "web";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$cardNumber = $_POST['cardNumber'];
$expiryDate = $_POST['expiryDate'];
$cvv = $_POST['cvv'];
$cardholderName = $_POST['cardholderName'];

// Insert form data into the payment table
$sql = "INSERT INTO payment (card_number, expiry_date, cvv, cardholder_name) VALUES ('$cardNumber', '$expiryDate', '$cvv', '$cardholderName')";

if ($conn->query($sql) === TRUE) {
    echo "Payment information inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

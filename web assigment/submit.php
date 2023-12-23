<?php
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

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into database
$sql = "INSERT INTO contactf (name, email) VALUES ('$name', '$email')";
session_start(); // Start the session

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // User is logged in, redirect to index.php
    header("Location: index.php?success=1");
    exit();
} else {
    // User is not logged in, redirect to index2.php
    header("Location: index2.php?success=1");
    exit();
}


?>

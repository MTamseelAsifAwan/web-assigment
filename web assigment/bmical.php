<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "tamseel@911";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    if (!empty($height) && !empty($weight)) {
        // Calculate BMI
        $bmi = ($weight / (($height * $height) / 10000)); // BMI calculation formula

        // Determine BMI category
        if ($bmi < 18.5) {
            $category = "Under Weight";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $category = "Normal";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $category = "Over Weight";
        } elseif ($bmi >= 30 && $bmi < 34.9) {
            $category = "Obesity (Class I)";
        } elseif ($bmi >= 35.5 && $bmi < 39.9) {
            $category = "Obesity (Class II)";
        } else {
            $category = "Extreme Obesity";
        }

        // Insert data into database
        $sql = "INSERT INTO bmic (height, weight, ) VALUES ('$height', '$weight')";

        if ($conn->query($sql) === TRUE) {
            header("Location: bmi.php?success=1");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please provide valid height and weight.";
    }
}
?>

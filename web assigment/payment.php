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

// Retrieve form data using isset to avoid undefined index warning
$card_number = isset($_POST['card_number']) ? $_POST['card_number'] : '';
$expirymonth = isset($_POST['expirymonth']) ? $_POST['expirymonth'] : '';
$expiryyear = isset($_POST['expiryyear']) ? $_POST['expiryyear'] : '';
$cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';
$cardholder_name = isset($_POST['cardholder_name']) ? $_POST['cardholder_name'] : '';

// Insert form data into the payment table
$sql = "INSERT INTO payment (card_number, expirymonth, expiryyear, cvv, cardholder_name)
VALUES ('$card_number', '$expirymonth', '$expiryyear', '$cvv', '$cardholder_name')";
// Check if the connection was established successfully
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the database connection
$conn->close();
?>
<?php
# Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyworkoutPlanner - Work Hard To Get Better Life</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="paymentstyle.css">
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-one.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-two.png">
  <link rel="preload" as="image" href="./assets/images/heart-rate.svg">
  <link rel="preload" as="image" href="./assets/images/calories.svg">
  <link rel="preload" as="image" href="card_img.png">

</head>
<style>
 

.payment-form {
  display: flex;
  flex-direction: column;
  border-radius: 13px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  color: black;
}

button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: white;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}

</style>


<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

        <span class="span">MyworkortPlanner</span>
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

        <li>
  <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === TRUE): ?>
    <a href="index.php" class="navbar-link" data-nav-link>Home</a>
  <?php else: ?>
    <a href="index2.php" class="navbar-link" data-nav-link>Home</a>
  <?php endif; ?>
</li>


          <li>
            <a href="dumbell.php" class="navbar-link" data-nav-link>Dumbell Exercises</a>
          </li>

          <li>
            <a href="barbell.php" class="navbar-link" data-nav-link>Barbell Exercises</a>
          </li>

          <li>
            <a href="bmi.php" class="navbar-link" data-nav-link>BMI Calculator</a>
          </li>


        </ul>

      </nav>
      <button class="btn btn-secondary" style="color: #fff; background-color: rgb(247, 52, 52);" type="button" id="liveChatbotButton">
        <i class="fas fa-comment-dots"></i> Live chatbot
      </button>
      
      <script>
        // Function to show the chatbot
        function showChatbot() {
          window.embeddedChatbotConfig = {
            chatbotId: "PbYOpBweVOU8EpuwliaOh",
            domain: "www.chatbase.co"
          };
      
          const script = document.createElement("script");
          script.src = "https://www.chatbase.co/embed.min.js";
          script.defer = true;
      
          document.body.appendChild(script);
        }
      
        // Event listener for the button click
        document.getElementById('liveChatbotButton').addEventListener('click', function() {
          showChatbot();
          this.disabled = true; // Disable the button after click
        });
      </script>
      

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

    </div>
    
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->
    
      <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section
        style="background-image: url('./assets/images/hero-bg.png')">
<div class="check">

        <div class="container">

          <div class="hero-content">
            <div class="container6">
              <div class="checkout-container">
              <form class="payment-form" action="payment.php" method="post" onsubmit="return validateForm()">
                   <h2 style="color: black;">Checkout</h2>
                   <img src="card_img.png" alt="Description of the image" width="50%" >

                  <div class="form-group">
                    <label for="card-number" style="color: black;">Card Number</label>
                    <input type="text" id="card-number" name="card_number" placeholder="Enter card number" required>
                  </div>
                  <div class="form-group" style="color: black;">
                    <label for="expiry">Expiry Month</label>
                    <input type="text" id="date" name="expirymonth" placeholder="month" required>
                  </div>
                  <div class="form-group" style="color: black;">
                    <label for="expiry">Expiry year</label>
                    <input type="text" id="month" name="expiryyear" placeholder="year" required>
                  </div>
                  <div class="form-group" style="color:black;" >
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
                  </div>
                  <div class="form-group" style="color: black;" >
                    <label for="name">Cardholder Name</label>
                    <input type="text" id="name" name="card_number" placeholder="cardholder_name" required>
                  </div>
                  <button type="submit">Pay Now</button>
                </form>
              </div>
            </div>
            
            
            </div>    
        
        </div>
        
        
        </div>

          
      </section>




       
      </section>



      



<!-- ... Your HTML code ... -->

<script>
  function validateForm() {
    let cardNumber = document.getElementById('card-number').value.replace(/-/g, ''); // Remove dashes
    let expiryMonth = document.getElementById('date').value;
    let expiryYear = document.getElementById('month').value;
    let cvv = document.getElementById('cvv').value;
    let cardholderName = document.getElementById('name').value;

    if (cardNumber.length !== 16) {
      alert("Please enter a valid 16-digit card number");
      return false;
    }

    if (expiryMonth.length == 0 || isNaN(expiryMonth) || expiryYear.length !== 2 || isNaN(expiryYear)) {
      alert("Please enter a valid expiry date in MM/YY format");
      return false;
    }

    if (cvv.length !== 3 && cvv.length !== 4 || isNaN(cvv)) {
      alert("Please enter a valid CVV (3 or 4 digits)");
      return false;
    }

    if (cardholderName.length < 2) {
      alert("Please enter a valid cardholder name");
      return false;
    }

    return true;
  }
</script>

<!-- ... Rest of your HTML code ... -->





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
  </a>


</body>

</html>
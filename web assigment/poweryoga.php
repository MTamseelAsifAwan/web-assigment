<?php
include 'config2.php'; // Include the database connection


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


  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Power Yoga</title>
  <link rel="stylesheet" href="DArms.css">
  
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
</head>

<style>
  .data-item {
    width: 100%; /* Adjust as needed */
    box-sizing: border-box; /* Ensure padding and border are included in the width */
    overflow: hidden; /* Prevent content from overflowing */
}

.data-item img {
    max-width: 100%; /* Make sure images don't exceed their container width */
    height: auto; /* Maintain image aspect ratio */
}
.data-item p{
  width: auto;
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
  
          <span class="span" >MyworkortPlanner</span>
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
              <a href="dumbell.php" class="navbar-link"  data-nav-link>Dumbell Exercises</a>
            </li>
  
            <li>
              <a href="barbell.php" class="navbar-link"  data-nav-link>Barbell Exercises</a>
            </li>
  
            <li>
              <a href="bmi.php" class="navbar-link"  data-nav-link>BMI Calculator</a>
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
      <section class="section hero  "  id="home" aria-label="hero" data-section style="background-image: url('./assets/images/hero-bg.png') ">
      <div class="container" style="background-color: #fff; padding-top: -500px;border-radius: 17px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 255, 0.75);border: 3px solid blue;">

          <div class="hero-content">
            <div class="exercise-table">
              <section class="exercise-section">
                <h1 style="color: black; padding-left: 70px; font-size: 32px;">Power Yoga</h1>
                <p><br></p>
<div class="bk" style=" width:1300px ;padding-right:1300px">
<div class="data" style="color: black; width: 900px;  overflow: hidden; border: 1px solid transparent;">

                <!-- Displaying fetched data -->
                <?php
                include 'config2.php'; // Include the database connection

                $selectedTitles = ["Introduction to Power Yoga","1. Enhanced Strength:","7. Detoxification:"];

                $sql = "SELECT * FROM yoga_blog_table";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                   
                      echo "<div class='data'>";
                      echo "<h2>" . $row['title'] . "</h2>";
                      echo "<p>" . $row['content'] . "</p>";
                      if (in_array($row['title'], $selectedTitles)) {
                      // Check if the 'image_url_column' exists in the fetched row array
                    
                        echo "<img src='" . $row['image_url'] . "' alt='Image' />";
                      
                      
                      echo "</div>";
                    }
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();


                ?>
                <!-- End of displaying fetched data -->
                </div>
</div>
              </section>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>
</body>
</html>

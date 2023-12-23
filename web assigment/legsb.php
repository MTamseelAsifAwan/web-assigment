<?php
include 'config2.php'; // Include the database connection
$exerciseTitles = [
  "1- Barbell Squats", 
  "2- Barbell Lunges",
  "3- Romanian Deadlifts",
  "4- Barbell Calf Raises",
  "5- Barbell Step-Ups"
  // Add more exercise titles here if needed
];


$sql = "SELECT * FROM bleg";
$result = $conn->query($sql);
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
  <title>Back Exercises with Dumbbells</title>
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
  
          <div class="container">
  
            <div class="hero-content">
              <div class="exercise-table">
                  <section class="exercise-section">
    <h1 style="color: white;padding-left: 70px; font-size: 32px; ">Legs Exercises with Barbells</h1>
<p>
    <br>
</p>
     <!-- Exercise 1 -->
     <div class="exercise" style="width: 900px;"  >
      <div  >
      <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $fetchedTitle = trim($row['title']);
                if (in_array($fetchedTitle, $exerciseTitles) && !empty($row['video'])) {
                    echo "<div class='exercise1' >";
                    echo "<h2>" . $row['title'] . "</h2>";
                    echo "<p>Sets: " . $row['sets'] . "</p>";
                    echo "<p>Repetitions: " . $row['repetitions'] . "</p>";
                    echo "<p>Precautions: " . $row['precautions'] . "</p>";
                    echo "</div>";
        
                    echo "<div class='video-container'>";
                    echo "<h2>Reference Video</h2>"; // Heading for the video
        
                    // Extract the YouTube video ID from the provided URL
                    $videoUrl = $row['video'];
                    $videoId = substr($videoUrl, strpos($videoUrl, "=") + 1);
        
                    // Embed the YouTube video using an iframe
                    echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$videoId' frameborder='0' allowfullscreen></iframe>";
        
                    echo "</div>";
                }
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
     </div>
  
        </div>
      </section>
    </article>
  </main>
</body>
</div>
</body>
</html>

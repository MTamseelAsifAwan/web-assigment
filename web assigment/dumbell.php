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
  <style>
   .exercise-table {
      display: grid;
      grid-template-columns: repeat(1, 1fr); /* On smaller screens, display exercises in a single column */
      gap: 20px;
    }

    .exercise-section {
      margin-bottom: 20px;
      position: relative;
    }

    .exercise-container {
      padding: 30px;
      box-shadow: 0px 0px 20px 10px rgb(17, 0, 255);
      border-radius: 15px;
      text-align: center;
      position: relative;
      background: rgba(14, 41, 194, 0.7);
      color: #fff;
      align-items: center;
      width: 100%;
    }

    .exercise-section h2 {
      font-size: 24px;
      margin-bottom: 10px;
      color: rgb(255, 255, 255);
    }

    .exercise-container img {
      width: 80%; /* Increase the image width for better visibility on smaller screens */
      height: auto;
    }

    .exercise-container button {
      background-color: white;
      color: blue;
      border: none;
      padding: 10px 20px;
      font-size: 22px;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;

    }

    h1 {
      font-size: 40px;
      color: rgb(255, 255, 255);
      padding: 10px;
      text-align: center; /* Center the text on smaller screens */
    }

    img {
      width: 100px; /* Adjust the image size for smaller screens */
      margin: 0 auto; /* Center the image on smaller screens */
    }

    /* Media query for screens smaller than 768px */
    @media screen and (max-width: 768px) {
      .exercise-table {
        grid-template-columns: repeat(1, 1fr); /* Still a single column for smaller screens */
        gap: 10px; /* Reduce the gap between exercises */
      }

      .exercise-container img {
        width: 100%; /* Make the image take the full width of the container on smaller screens */
      }

      .exercise-container button {
        padding: 5px 10px; /* Reduce button padding for smaller screens */
      }
    }

  </style>

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
            <a href="dumbell.php" class="navbar-link active" data-nav-link>Dumbell Exercises</a>
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
           <h1  >  Dumbell Exercises</h1>

        <div class="container">

          <div class="hero-content">
            <div class="exercise-table">
                <section class="exercise-section">
                  <h2>Shoulder Exercises</h2>
                  <div class="exercise-container">
                    <a href="Dshoulder.php">
                      <button><img src="./assets/images/Untitled design3.png" alt="Shoulder Exercise">Click Here</button>
                    </a>
                  </div>
                </section>
                
                <section class="exercise-section">
                  <h2>Arm Exercises</h2>
                  <div class="exercise-container">
                    <a href="Darms.php">
                      <button><img src="./assets/images/Untitled design1.png" alt="Arm Exercise">Click Here</button>
                    </a>
                  </div>
                </section>
                <section class="exercise-section">
                  <h2>Back Exercises</h2>
                  <div class="exercise-container">
                    <a href="backd.php">
                      <button><img src="./assets/images/Untitled design.png" alt="Back Exercise">Click Here</button>
                    </a>
                  </div>
                </section>
                <section class="exercise-section">
                  <h2>Leg Exercises</h2>
                  <div class="exercise-container">
                    <a href="legsD.php">
                      <button><img src="./assets/images/Untitled design2.png" alt="Leg Exercise">Click Here</button>
                    </a>
                  </div>
                </section>
              </div>
        
            </section>

          </div>

          
      </section>




       
      </section>










  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
  </a>


</body>

</html>
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
  <title>MyworkoutPlanner  Work Hard To Get Better Life</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/bmics.css">

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

        <span class="span">MyworkoutPlanner</span>
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
            <a href="bmi.php" class="navbar-link active" data-nav-link>BMI Calculator</a>
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
       
<!--Bmi -->
<div class="containerrr" action="bmi.php" method="post">
  <h1 style=" margin-bottom: 40px; color: blue;">BMI Calculator</h1>

  <p style="color: white;">Height (cm)</p>
    <input type="number" name="height" placeholder="174 cm" id="height">

    <p style="color: white;">Weight (kg)</p>
    <input type="number" name="weight" placeholder="70 kg" id="weight">

    <button type="submit" style="height: 35px; margin-top: 25px; margin: 0 auto; display: block; position: relative; border-radius: 20px; border: none; text-align: center; background-color: #0442ec; color: #fff; font-size: 22px;" id="btn">Calculate</button>


  <div id="result" name="result"></div>

     
            <p>
              <br>
              <br>
            
              <br>
            </p>
            <p>
  
            </p>
      </section>


      <script>
        window.onload = () => {
          const button = document.querySelector('#btn');
          button.addEventListener('click', calculateBmi)
      }
      
      function calculateBmi() {
          const height = document.querySelector('#height').value;
          const weight = document.querySelector('#weight').value;
          const result = document.querySelector('#result');
      
          if (!height || isNaN(height) || height < 0) {
              result.innerText = "Please provide a valid height";
              return;
          } else if (!weight || isNaN(weight) || weight < 0) {
              result.innerText = "Please provide a valid weight";
              return;
          }
      
          const bmi = (weight / ((height * height) / 10000)).toFixed(2);
      
          if (bmi < 18.5) {
              result.innerText = `Under Weight: ${bmi}`; 
          } else if (bmi >= 18.5 && bmi < 24.9) {
              result.innerText = `Normal: ${bmi}`;
          } else if (bmi >= 25 && bmi < 29.9) {
              result.innerText = `Over Weight: ${bmi}`;
          } else if (bmi >= 30 && bmi < 34.9) {
              result.innerText = `Obesity (Class I): ${bmi}`;
          } else if (bmi >= 35.5 && bmi < 39.9) {
              result.innerText = `Obesity (Class II) : ${bmi}`;
          } else {
              result.innerText = `Extreme Obesity: ${bmi}`;
          }
      }
      </script>
      


    


   






    </article>
  </main>





 
</body>

</html>
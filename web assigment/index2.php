<?php
# Initialize the session


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
<!--favicon-->
<link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
            <a href="#home" class="navbar-link active" data-nav-link>Home</a>
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

 <!--     <a style="width: 105px; height: 40px; text-align: center; " href="login.php" class="btn btn-secondary">Join</a>-->
     <!-- <div class="circular-box">
  <a class="content" href="#" onclick="showPopup()">
    <img width="50" height="50" src="https://img.icons8.com/ios/50/user--v1.png" alt="user--v1"/>
    <span> #htmlspecialchars($_SESSION["username"]); </span>
  </a>
</div>

<div class="popup" id="logoutPopup">
  <div class="popup-content">
    <p>Are you sure you want to log out?</p>
    <button onclick="logout()">Logout</button>
    <button onclick="hidePopup()">Cancel</button>
  </div>
</div> -->
<li>
            <a href="log2.php" class="circular-box" style="font-size:16px;
            font-weight: var(--fw-700); width:fit-content; color:blue;height:80px;width:97px" data-nav-link>Join/Login</a>
          </li>

<button class="btn btn-secondary" style="color: #fff; background-color: rgb(247, 52, 52);font-size:13px;" type="button" id="liveChatbotButton">
        <i class="fas fa-comment-dots"></i> liveChatbot
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

            <p class="hero-subtitle">
              <strong class="strong">The Best</strong>Fitness Club
            </p>

            <h1 class="h1 hero-title">Work Hard To Get Better Life</h1>

            <p class="section-text">

            "Believe you can and you're halfway there." - Theodore Roosevelt

"The only way to do great work is to love what you do." - Steve Jobs            </p>

            <a href="#" class="btn btn-primary">Get Started</a>

          </div>

          <div class="hero-banner">

            <img src="./assets/images/hero-banner.png" width="660" height="753" alt="hero banner" class="w-100">

            <img src="./assets/images/hero-circle-one.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-1">
            <img src="./assets/images/hero-circle-two.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-2">

            <img src="./assets/images/heart-rate.svg" width="255" height="270" alt="heart rate"
              class="abs-img abs-img-1">
            <img src="./assets/images/calories.svg" width="348" height="224" alt="calories" class="abs-img abs-img-2">

          </div>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <div class="about-banner has-after">
            <img src="./assets/images/about-banner.png" width="660" height="648" loading="lazy" alt="about banner"
              class="w-100">

            <img src="./assets/images/about-circle-one.png" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-1">
            <img src="./assets/images/about-circle-two.png" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-2">

            <img src="./assets/images/fitness.png" width="650" height="154" loading="lazy" alt="fitness"
              class="abs-img w-100">
          </div>

          <div class="about-content">

            <p class="section-subtitle" id="About">About Us</p>

            <h2 class="h2 section-title">Welcome To Our Fitness Gym</h2>

            <p class="section-text">
            "Welcome to our gym, where dedication meets transformation. Here, we're more than just weights and machines; we're a community fueled by ambition and support. Step in, and let our vibrant atmosphere inspire your fitness journey. From tailored workouts to expert guidance, we're here to empower every step you take towards a healthier, stronger you. Get ready to sweat, smile, and achieve your fitness goals with us!"
            </p>

            <p class="section-text">
              All the activities will going to take place under servalance of Mr.Tamseel Asif Awan
            </p>

            <div class="wrapper">

              <div class="about-coach">

                <figure class="coach-avatar">
                  <img src="./assets/images/IMG_20231023_082643_230.jpg" width="65" height="65" loading="lazy" alt="Trainer">
                </figure>


      

          </div>

        </div>
      </section>





      <!-- 
        - #VIDEO
      -->

      <section class="section video" aria-label="video">
        <div class="container">

          <div class="video-card has-before has-bg-image"
            style="background-image: url('./assets/images/video-banner.jpg')">

            <h2 class="h2 card-title">Explore Fitness Life</h2>

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play-sharp" aria-hidden="true"></ion-icon>
            </button>

            <a href="https://www.youtube.com/watch?v=tUykoP30Gb0&pp=ygUOZ3ltIGludHJvIHZkZW8%3D" class="btn-link has-before">Watch More</a>

          </div>

        </div>
      </section>





      <!-- 
        - #CLASS
      -->

      <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
        style="background-image: url('./assets/images/classes-bg.png')">
        <div class="container">

          <p class="section-subtitle">Our Classes</p>

          <h2 class="h2 section-title text-center">Fitness Classes <br>For Every Goal</h2>

          <ul class="class-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/blog-1.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="lifting_blog.php" class="card-title">Weight Lifting</a>
                    </h3>
                  </div>

                  <p class="card-text">
                  Weight lifting isn't just about building muscles; it's about sculpting resilience and discipline with every rep. It's the art of pushing boundaries, both physical and mental, to unveil your inner strength.                  </p>

                  

                </div>

              </div>
            </li>
<!--
            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/courses-fitness.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strenght"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="#" class="card-title">Cardio & Strenght</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
                  </p>

                  <div class="card-progress">

                   

                    <div class="progress-bg">
                      
                    </div>

                  </div>

                </div>

              </div>
            </li>-->

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/blog4.jpg" width="416" height="240" loading="lazy" alt="Power Yoga"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="poweryoga.php" class="card-title">Power Yoga</a>
                    </h3>
                  </div>

                  <p class="card-text">
                  Power yoga ignites the body and mind, blending strength, flexibility, and mindfulness into a dynamic flow. It's a practice that harnesses breath and movement, cultivating both physical stamina and inner balance.                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                    
                    </div>

                    <div class="progress-bg">
    
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/blog5.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="bmi.php" class="card-title">BMI Calculator</a>
                    </h3>
                  </div>

                  <p class="card-text">
                  A BMI calculator assesses body mass index, offering a numerical estimate of a person's body fat based on height and weight.                   </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
               
                    </div>

                    <div class="progress-bg">
                    
                    </div>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>



    </article>
  </main>


<p>





</p>
<!--Bmi -->
<div class="containerrr">
  <h1 style=" margin-bottom: 40px; color: blue;">BMI Calculator</h1>

  <p style="  color: white;padding-right: -70px;position: relative;">Height (cm)</p>
  <input type="number" placeholder="176 cm" id="height">

  <p style="  color: white;">Weight (kg)</p>
  <input type="number" placeholder="80 Kg" id="weight">

  <button style="     height: 35px;
  margin-top: 25px;
  margin: 0 auto;
  display: block;
  position: relative;
  border-radius: 20px;
  border: none;
  text-align: center;
 
  background-color: #0442ec;
  color: #fff;
  font-size: 22px;" id="btn">Calculate</button>

  <div id="result"></div>
</div>
<div class="timer-container" style="width: auto;">
  <P style="color: yellow;font-weight: bold;">Avail The Offer</P>
  <p> Time Left</p> 
  <div class="timer" id="timer">
   
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function () {
      var timer;
      var endDate = new Date(); // Set your end date and time here
      endDate.setMinutes(endDate.getMinutes() + 515); // Example: 5 minutes from now

      function updateTimerDisplay() {
          var now = new Date();
          var timeDifference = endDate - now;

          if (timeDifference < 0) {
              clearInterval(timer);
              $("#timer").text("Time's up!");
          } else {
              var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
              var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

              var timerText = days + "d " + hours + "h " + minutes + "m " + seconds + "s";
              $("#timer").text(timerText);
          }
      }

      // Initial display
      updateTimerDisplay();

      // Update every second
      timer = setInterval(function () {
          updateTimerDisplay();
      }, 1000);
  });
</script>

<!--Pakages-->

<section class="section class bg-dark has-bg-image" id="class" aria-label="class"
style="background-image: url('./assets/images/classes-bg.png')">
<div class="container">

  <p class="section-subtitle">Our Pakages</p>



  <ul class="class-list has-scrollbar">

    <li class="scrollbar-item">
      <div class="class-card">

        <div class="package basic">
          <h2>Basic Package</h2>
          <p> 1- Access to gym facilities during off-peak hours<br>
2- Standard workout routines<br>
3- Limited access to group fitness classes<br>
4- Basic progress tracking</p>
          <p style="color:black">Price: $19.99/month</p>
          <p><br>
          
          <br>





<br>

<br>

          </p>
          <a href="payment.php" class="bt bt-basic">Select Basic</a>
      </div>

        <div class="card-content">


   
          

        </div>

      </div>
    </li>

    <li class="scrollbar-item">
      <div class="class-card">

        <div class="package platinum">
          <h2>Platinum Package</h2>
          <p>1- Unlimited access to gym facilities, including peak hours<br>
2- Customizable workout plans<br>
3- Full access to group fitness classes<br>
4- Advanced progress tracking and analytics<br>
5- Nutrition guidance</p>
          <p style="color:black" >Price: $39.99/month</p>
          <p>
            <br>
          <br>

          </p>
          <a href="payment.php" class="bt bt-platinum">Select Platinum</a>
      </div>
        <div class="card-content">

      

       

          <div class="card-progress">

           

            <div class="progress-bg">
              
            </div>

          </div>

        </div>

      </div>
    </li>

    <li class="scrollbar-item">
      <div class="class-card">

        <div class="package gold">
          <h2>Gold Package</h2>
          <p>1- All features from the Premium Package <br>
2- Personal training sessions (2 sessions/month)<br>
3- Priority booking for group classes<br>
4- Exclusive access to special gym events or workshops<br>
5- Discount on merchandise and additional training sessions</p>
          <p style="color:black" >Price: $59.99/month</p>
          <p>
            <br>
            
          </p>
          <a href="payment.php" class="bt bt-gold">Select Gold</a>
      </div>
      

      </div>
    </li>

            
            </div>

          </div>

        </div>

      </div>
    </li>

  </ul>

</div>
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


<p>
  <br>

<br>

  <br>
</p>
<!--Contact us-->
<div id="contact">
<section style="box-shadow: blue;" >
<p style="color: blue; text-align: center; position: relative;text-shadow: rgb(78, 30, 30);  font-size: 40px;
font-weight: 600;">Contact Us</p>
</section> 
<div class="containerr">
  
  <div class="content">
    
    <div class="right-side">
      <div class="topic-text">Send us a message</div>
      <p style="font-size: 16px;" >If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="submit.php" method="post" onsubmit="return validatecontactForm()">
    <div class="input-box">
        <input type="text" placeholder="Enter your name" name="name" id="name">
    </div>
    <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" id="email">
    </div>
    <div class="button" onclick="return validatecontactForm()" >
        <input  style="background-color: #0442ec;" type="submit" value="Send Now">
    </div>
</form>

  </div>
 <!-- <iframe
  width="600"
  height="450"
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.4811553170865!2d-74.00609448473109!3d40.712775985042916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258b089ff19e7d%3A0x1f30067e690249f!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1567567235396!5m2!1sen!2sus"
  frameborder="0"
  style="border:0"
  allowfullscreen
></iframe>-->
  </div>
</div>
  
<!-- SECTION REVIEW -->
<section class="section-review" id="review">
  <div class="review-box container" data-aos="fade-up">
    <h2 style="color: blue; font-size: 40px; font-weight: 600;">
      what people say
    </h2>
<p><br>
</p>
    <div class="review-card">
      <img
        src="./assets/images/review-img-1.jpg"
        alt="user"
        class="review-card__image"
        width="100"
        height="100"
      />
      <blockquote class="review-card__content">
        <p class="text">
        Praises the website for its user-friendly interface, diverse exercise options, and detailed progress tracking, applauding it as a comprehensive and motivating fitness tool.
        </p>

        <div class="name">Tamseel Asif </div>
      </blockquote>
    </div>

    <div class="review-card">
      <img
        src="./assets/images/review-img-2.jpg"
        alt="user"
        class="review-card__image"
        width="100"
        height="100"
      />
      <blockquote class="review-card__content">
        <p class="text">
        Acknowledges the platform's potential for enhancement in interface modernization, inclusion of more specialized workout routines, and a desire for increased interactive elements and instructional support while recognizing its current value for planning workouts and tracking progress.
        </p>
        <div class="name">Urooj Fatima</div>
      </blockquote>
    </div>
  </div>
</section>
</div>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="section footer-top bg-dark has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

            <span class="span">Fitlife</span>
          </a>

          <p class="footer-brand-text">
            Etiam suscipit fringilla ullamcorper sed malesuada urna nec odio.
          </p>

          <div class="wrapper">

            <img src="./assets/images/footer-clock.png" width="34" height="34" loading="lazy" alt="Clock">

           <img src="./assets/images/class-icon-4.png" width="34" height="34" loading="lazy ">
           <img src="./assets/images/class-icon-1(1).png" width="34" height="34" loading="lazy ">
           <img src="./assets/images/class-icon-2(1).png" width="34" height="34" loading="lazy ">
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Our Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Home</a>
          </li>

          <li>
            <a href="#About" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="https://www.bing.com/ck/a?!&&p=c833d398ea25da11JmltdHM9MTcwMjY4NDgwMCZpZ3VpZD0zNzcwNDRkYS1kMTQxLTY5ZjEtM2VjMC01NzE3ZDA1NTY4MTEmaW5zaWQ9NTE5Mg&ptn=3&ver=2&hsh=3&fclid=377044da-d141-69f1-3ec0-5717d0556811&psq=facebook&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw&ntb=1" class="footer-link">Facebook</a>
          </li>

          <li>
            <a href="https://www.bing.com/ck/a?!&&p=4e11f9466107ac11JmltdHM9MTcwMjY4NDgwMCZpZ3VpZD0zNzcwNDRkYS1kMTQxLTY5ZjEtM2VjMC01NzE3ZDA1NTY4MTEmaW5zaWQ9NTE5NA&ptn=3&ver=2&hsh=3&fclid=377044da-d141-69f1-3ec0-5717d0556811&psq=instagram&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS8_aGw9ZW4&ntb=1" class="footer-link">Instagram</a>
          </li>

          <li>
            <a href="#contact" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Contact Us</p>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="location" aria-hidden="true"></ion-icon>
            </div>

            <address class="address footer-link">
              1247/Plot No. 39, 15th Phase, Colony, Khanpur, chakwal
            </address>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="call" aria-hidden="true"></ion-icon>
            </div>

            <div>
              <a href="tel:18001213637" class="footer-link">1800-121-3637</a>

              <a href="tel:+915552348765" class="footer-link">+91 555 234-8765</a>
            </div>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="mail" aria-hidden="true"></ion-icon>
            </div>

            <div>
              <a href="mailto:info@fitlife.com" class="footer-link">info@fitlife.com</a>

              <a href="mailto:services@fitlife.com" class="footer-link">services@fitlife.com</a>
            </div>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Our Newsletter</p>
          </li>

          <li>
       
</form>


          </li>

          <li>
            <ul class="social-list">

              <li>
                <a href="https://www.bing.com/ck/a?!&&p=c833d398ea25da11JmltdHM9MTcwMjY4NDgwMCZpZ3VpZD0zNzcwNDRkYS1kMTQxLTY5ZjEtM2VjMC01NzE3ZDA1NTY4MTEmaW5zaWQ9NTE5Mg&ptn=3&ver=2&hsh=3&fclid=377044da-d141-69f1-3ec0-5717d0556811&psq=facebook&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw&ntb=1" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://www.bing.com/ck/a?!&&p=4e11f9466107ac11JmltdHM9MTcwMjY4NDgwMCZpZ3VpZD0zNzcwNDRkYS1kMTQxLTY5ZjEtM2VjMC01NzE3ZDA1NTY4MTEmaW5zaWQ9NTE5NA&ptn=3&ver=2&hsh=3&fclid=377044da-d141-69f1-3ec0-5717d0556811&psq=instagram&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS8_aGw9ZW4&ntb=1" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://www.bing.com/ck/a?!&&p=1252f041a3db412eJmltdHM9MTcwMjY4NDgwMCZpZ3VpZD0zNzcwNDRkYS1kMTQxLTY5ZjEtM2VjMC01NzE3ZDA1NTY4MTEmaW5zaWQ9NTE5NQ&ptn=3&ver=2&hsh=3&fclid=377044da-d141-69f1-3ec0-5717d0556811&psq=twitter&u=a1aHR0cHM6Ly90d2l0dGVyLmNvbS8&ntb=1" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 . All Rights Reserved By <a href="#" class="copyright-link">MTamseelAsifAwan.</a>
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link has-before">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link has-before">Terms & Condition</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>

  <script>
function showPopup() {
  var popup = document.getElementById("logoutPopup");
  popup.style.display = "block";
}

function hidePopup() {
  var popup = document.getElementById("logoutPopup");
  popup.style.display = "none";
}

function logout() {
  // Perform logout actions here...
  // For example, redirect the user to the logout URL or clear session data.
   window.location.href = 'logout.php';
 // window.location.href = 'index.html';
  alert("Logout successful");
  hidePopup();
}
function validatecontactForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;

    // Check if name and email are not empty
    if (name.trim() === '' || email.trim() === '') {
        alert('Please enter both name and email');
        return false; // Prevent form submission
    }

    // Add email format validation if needed
    // For instance: check if the email follows a basic pattern
    var emailPattern = /\S+@\S+\.\S+/;
    if (!emailPattern.test(email)) {
        alert('Please enter a valid email address');
        return false; // Prevent form submission
    }

    // If all validations pass, allow the form to submit
    return true;
}

</script>



  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
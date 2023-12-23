<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
  echo "<script>" . "window.location.href='./'" . "</script>";
  exit;
  
}


require_once "./config.php";

$user_login_err = $user_password_err = $login_err = "";
$user_login = $user_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["user_login"]))) {
    $user_login_err = "Please enter your username or an email id.";
  } else {
    $user_login = trim($_POST["user_login"]);
  }

  if (empty(trim($_POST["user_password"]))) {
    $user_password_err = "Please enter your password.";
  } else {
    $user_password = trim($_POST["user_password"]);
  }

  if (empty($user_login_err) && empty($user_password_err)) {
    $sql = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      mysqli_stmt_bind_param($stmt, "ss", $param_user_login, $param_user_login);
      $param_user_login = $user_login;

      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

          if (mysqli_stmt_fetch($stmt)) {
            if (password_verify($user_password, $hashed_password)) {
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;
              $_SESSION["loggedin"] = TRUE;

              echo "<script>" . "window.location.href='./'" . "</script>";
              exit;
            } else {
              $login_err = "The email or password is incorrect.";
            }
          }
        } else {
          $login_err = "Invalid username or password.";
        }
      } else {
        echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
        echo "<script>" . "window.location.href='./log2.php'" . "</script>";
        exit;
      }

      mysqli_stmt_close($stmt);
    }
  }

  mysqli_close($link);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
  <script defer src="./js/script.js"></script>
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-one.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-two.png">
  <link rel="preload" as="image" href="./assets/images/heart-rate.svg">
  <link rel="preload" as="image" href="./assets/images/calories.svg">
  <link rel="stylesheet" href="./assets/css/bmics.css">
  <link rel="stylesheet" href="logstyle.css">
</head>

<body id="top">

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
      <a href="bmi.php" class="navbar-link" data-nav-link>BMI Calculator</a>
    </li>

  

  </ul>

</nav>

<a href="log2.html" class="btn btn-secondary">Join Now</a>

<button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
  <span class="line"></span>
  <span class="line"></span>
  <span class="line"></span>
</button>

</div>
</header>

<main>
  <article>
    <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section style="background-image: url('./assets/images/hero-bg.png')">
      <div class="container">
        <div class="hero-content">
        <div class="f">
            <div class="background">
                <div class="shape"></div>
                <div class="shape"></div>
            </div>
          <div class="container">
            <div class="row min-vh-100 justify-content-center align-items-center">
              <div class="col-lg-5">
              
               
                   <!-- Form starts here -->
<form   id="loginForm" class="fl" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>

  <div class="fom" >
  <div id="error-message" class="error-message" style="width: 350px;padding: right 250px;" >
  <?php
  if (!empty($login_err)) {
    echo "<div class='alert alert-danger'>" . $login_err . "</div>";
  }
  ?>
</div>
      <h3 >Login Here</h3>
      <label for="username">Username</label>
      <input type="text" name="user_login" placeholder="Email or Phone" id="username">
      <label for="password">Password</label>
      <input type="password" name="user_password" placeholder="Password" id="password">
      <button type="submit" name="login">Log In</button>
      <a style="  margin-top: 50px;
      width: 26%;
      background-color:  rgb(32, 97, 218);
      color: #080710;
      padding: 15px 0;
      font-size: 18px;
      font-weight: 600;
      text-align: center;
      border-radius: 5px;
      cursor: pointer;
      color: white;" href="register.php" id="signupButton" >signup</a>
     
  </div>


</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>// Select the form element
const loginForm = document.getElementById("loginForm");

// Function to handle form submission via AJAX
const handleFormSubmit = async (event) => {
  event.preventDefault(); // Prevent default form submission

  const formData = new FormData(loginForm); // Get form data
  const url = loginForm.getAttribute("action"); // Get form action URL

  try {
    const response = await fetch(url, {
      method: "POST",
      body: formData,
    });

    if (!response.ok) {
      throw new Error("Network response was not ok.");
    }

    const data = await response.text(); // Process response data if needed

    // You can perform actions based on the response here

    console.log(data); // Log the response or perform other actions
  } catch (error) {
    console.error("There was an error!", error);
  }
};

// Attach event listener to the form for submission
loginForm.addEventListener("", handleFormSubmit);
</script>
<!-- Form ends here -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </article>
</main>

<!-- Your footer or additional content -->

</body>

</html>


<?php
# Include connection
require_once "./config.php";

# Define variables and initialize with empty values
$username_err = $email_err = $password_err = "";
$username = $email = $password = "";

# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # Validate username
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
  } else {
    $username = trim($_POST["username"]);
    if (!ctype_alnum(str_replace(array("@", "-", "_"), "", $username))) {
      $username_err = "Username can only contain letters, numbers and symbols like '@', '_', or '-'.";
    } else {
      # Prepare a select statement
      $sql = "SELECT id FROM users WHERE username = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
        # Bind variables to the statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        # Set parameters
        $param_username = $username;

        # Execute the prepared statement 
        if (mysqli_stmt_execute($stmt)) {
          # Store result
          mysqli_stmt_store_result($stmt);

          # Check if username is already registered
          if (mysqli_stmt_num_rows($stmt) == 1) {
            $username_err = "This username is already registered.";
          }
        } else {
          echo "<script>" . "alert('Oops! Something went wrong. Please try again later.')" . "</script>";
        }

        # Close statement 
        mysqli_stmt_close($stmt);
      }
    }
  }

  # Validate email 
  if (empty(trim($_POST["email"]))) {
    $email_err = "Please enter an email address";
  } else {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Please enter a valid email address.";
    } else {
      # Prepare a select statement
      $sql = "SELECT id FROM users WHERE email = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
        # Bind variables to the statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_email);

        # Set parameters
        $param_email = $email;

        # Execute the prepared statement 
        if (mysqli_stmt_execute($stmt)) {
          # Store result
          mysqli_stmt_store_result($stmt);

          # Check if email is already registered
          if (mysqli_stmt_num_rows($stmt) == 1) {
            $email_err = "This email is already registered.";
          }
        } else {
          echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
        }

        # Close statement
        mysqli_stmt_close($stmt);
      }
    }
  }

  # Validate password
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
  } else {
    $password = trim($_POST["password"]);
    if (strlen($password) < 8) {
      $password_err = "Password must contain at least 8 or more characters.";
    }
  }

  # Validate other fields (dob, age, city, profession, activity_level, fitness_goal)
  $dob = $_POST['dob']; // Retrieve date of birth
  $age = $_POST['age']; // Retrieve age
  $city = $_POST['city']; // Retrieve city
  $profession = $_POST['profession']; // Retrieve profession
  $activity_level = $_POST['activity_level']; // Retrieve activity level
  $fitness_goal = $_POST['fitness_goal']; // Retrieve fitness goal
  $phone = $_POST['phone'];
$fitness_level = $_POST['fitness_level'];
$medical_condition = $_POST['medical_condition'];

  # Check input errors before inserting data into database
  if (empty($username_err) && empty($email_err) && empty($password_err)) {
    # Prepare an insert statement with additional fields
    $sql = "INSERT INTO users(username, email, password, dob, age, city, profession, activity_level, fitness_goal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($link, $sql)) {
      # Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssssissss", $param_username, $param_email, $param_password, $param_dob, $param_age, $param_city, $param_profession, $param_activity_level, $param_fitness_goal);

      # Set parameters
      $param_username = $username;
      $param_email = $email;
      $param_password = password_hash($password, PASSWORD_DEFAULT);
      $param_dob = $dob;
      $param_age = $age;
      $param_city = $city;
      $param_profession = $profession;
      $param_activity_level = $activity_level;
      $param_fitness_goal = $fitness_goal;

      # Execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        echo "<script>" . "alert('Registration completed successfully. Login to continue.');" . "</script>";
        echo "<script>" . "window.location.href='./log2.php';" . "</script>";
        exit;
      } else {
        echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
      }

      # Close statement
      mysqli_stmt_close($stmt);
    }
  }

  # Close connection
  mysqli_close($link);
}
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
  <title>User login system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="regist.css">
  <link rel="stylesheet" href="./assets/css/bmics.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
  <script defer src="./js/signupscript.js"></script>
</head>
<style>

  
</style>
<body>
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
      <a href="index2.php" class="navbar-link active" data-nav-link>Home</a>
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

<a href="login.html" class="btn btn-secondary">Join Now</a>

<button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
  <span class="line"></span>
  <span class="line"></span>
  <span class="line"></span>
</button>

</div>
</header>
<article>
    <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section style="background-image: url('./assets/images/hero-bg.png')">
      <div class="container">
        <div class="hero-content">
<div class="background">
                <div class="shape"></div>
                <div class="shape"></div>
            </div>
  <div class="container">
    <div class="row min-vh-100 justify-content-center align-items-center">
      <div class="col-lg-5">
        
          <!-- form starts here -->
        <!-- Updated HTML form -->
<form id="signupForm" class="sf" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
  <div class="form-wrap border rounded p-4 bg-dark">
    <h1>Sign up</h1>
    <p>Please fill this form to register</p>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" name="username" id="username" value="<?= $username; ?>">
      <small class="text-danger"><?= $username_err; ?></small>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" name="email" id="email" value="<?= $email; ?>">
      <small class="text-danger"><?= $email_err; ?></small>
    </div>
    <div class="mb-2">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="password" value="<?= $password; ?>">
      <small class="text-danger"><?= $password_err; ?></small>
    </div>
    <!-- New fields -->
    <!-- ... (existing code) ... -->
<div class="mb-3">
  <label for="dob" class="form-label">Date of Birth</label>
  <input type="date" class="form-control" name="dob" id="dob" value="<?= isset($dob) ? $dob : ''; ?>">
</div>
<div class="mb-3">
  <label for="age" class="form-label">Age</label>
  <input type="number" class="form-control" name="age" id="age" value="<?= isset($age) ? $age : ''; ?>">
</div>
<div class="mb-3">
  <label for="city" class="form-label">City</label>
  <input type="text" class="form-control" name="city" id="city" value="<?= isset($city) ? $city : ''; ?>">
</div>
<div class="mb-3">
  <label for="profession" class="form-label">Profession</label>
  <input type="text" class="form-control" name="profession" id="profession" value="<?= isset($profession) ? $profession : ''; ?>">
</div>
<div class="mb-3">
  <label for="activity_level" class="form-label">Activity Level</label>
  <select class="form-select" name="activity_level" id="activity_level">
    <option value="sedentary">Sedentary</option>
    <option value="moderate">Moderate</option>
    <option value="active">Active</option>
    <!-- Add more options as needed -->
  </select>
</div>
<div class="mb-3">
  <label for="fitness_goal" class="form-label">Fitness Goal</label>
  <input type="text" class="form-control" name="fitness_goal" id="fitness_goal" value="<?= isset($fitness_goal) ? $fitness_goal : ''; ?>">
</div>
<div class="mb-3">
  <label for="phone" class="form-label">Phone Number</label>
  <input type="tel" class="form-control" name="phone" id="phone" value="<?= isset($phone) ? $phone : ''; ?>">
</div>
<div class="mb-3">
  <label for="fitness_level" class="form-label">Fitness Level</label>
  <select class="form-select" name="fitness_level" id="fitness_level">
    <option value="beginner">Beginner</option>
    <option value="intermediate">Intermediate</option>
    <option value="advanced">Advanced</option>
    <!-- Add more options as needed -->
  </select>
</div>
<div class="mb-3">
  <label for="medical_condition" class="form-label">Medical Condition</label>
  <textarea class="form-control" name="medical_condition" id="medical_condition"><?= isset($medical_condition) ? $medical_condition : ''; ?></textarea>
</div>
<!-- ... (existing code) ... -->

    <div class="mb-3">
      <input type="submit" class="btn btn-primary form-control" name="submit" value="Sign Up">
    </div>
    <p class="mb-0">Already have an account ? 
 <a href="log2.php" >     <div class="mb-3">      
      <input  class="btn btn-primary form-control" name="login" value="Login ">
    </div></a>
</form>

          <!-- form ends here -->
        </div>
      </div>
    </div>
  </div>
      </div>
</div>
  </section>
  </article>
</body>  

</html>
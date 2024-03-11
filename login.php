<?php
 session_start();
  include "connect.php";

  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $emailCheck = "SELECT * FROM `tourist` WHERE email = '$email'";
    $query = mysqli_query($conn, $emailCheck);
    $rowCheck = mysqli_num_rows($query);
    
    if ($rowCheck) {
      $emailPass = mysqli_fetch_assoc($query);
      $_SESSION['id'] = $emailPass['id'];
      $_SESSION['name'] = $emailPass['name'];
      $dbpassword = $emailPass['password'];
      $dbId = $emailPass['id'];
      $passDecode = password_verify($password, $dbpassword);
      if ($passDecode = "true") {
        header('location:userPanel/index.php');
      } else {
  ?>
        <script>
          alert("Invalid Password Or Email");
        </script>
  <?php
      }
    }
  } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Icon CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css">
    <title>BTV</title>
</head>

<body id="body">
    <div id="main">
        <div id="form">
            <form method="POST">
                <span id="form_heading">Sign In</span>
                <span>Email</span>
                <input class="userInput" type="email" name="email" value="" required>
                <span>Password</span>
                <input class="userInput" type="password" name="password" value="" required>
                <input class="userInput" id="input_submit" type="submit" name="submit" value="Sign In">
                <span id="sup-link">Not have an account? <a href="signup.php"> SignUp Here </a></span>
            </form>
        </div>
    </div>
</body>

</html>
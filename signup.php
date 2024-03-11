<?php

include "connect.php";
if (isset($_POST['submit'])) {
  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $Number = $_POST['number'];
  $Password = $_POST['password'];
  $pass = password_hash($Password, PASSWORD_BCRYPT);
  $insert = "INSERT INTO `tourist`(`name`, `password`, `email`,`contact`) VALUES ('$Name','$pass','$Email','$Number')";
  $set = mysqli_query($conn, $insert);
  if ($set) {
?>
    <script>
      alert("Account created successfully");
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Something went wrong");
    </script>
<?php
  }
}
?>
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

<body>
    <div id="main">
        <div id="form">
            <form method="POST">
                <span id="form_heading">Register Now</span>
                <span>Name</span>
                <input class="userInput" type="text" name="name" value="" required>
                <span>Email</span>
                <input class="userInput" type="text" name="email" value="" required>
                <span>Phone</span>
                <input class="userInput" type="text" name="number" value="" required>
                <span>Password</span>
                <input class="userInput" type="password" name="password" value="" required>
                <input class="userInput" id="input_submit" type="submit" name="submit" value="Register">
                <span id="sup-link">Have an account? <a href="login.php"> Log in </a></span>
            </form>
        </div>
    </div>
</body>

</html>
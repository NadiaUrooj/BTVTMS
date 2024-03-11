<?php
 session_start();
  include "../connect.php";

  if (isset($_POST['submit'])) {
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $emailCheck = "SELECT * FROM `admin` WHERE phone = '$phone'";
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
        header('location:index.php');
      } else {
  ?>
        <script>
          alert("Invalid Password Or Phone");
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
    <link rel="stylesheet" href="../css/login.css">
    <title>BTV</title>
</head>

<body id="body">
    <div id="main">
        <div id="form">
            <form method="POST">
                <span id="form_heading">Admin Login</span>
                <span>Email</span>
                <input class="userInput" type="phone" name="phone" value="" required>
                <span>Password</span>
                <input class="userInput" type="password" name="password" value="" required>
                <input class="userInput" id="input_submit" type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>
</body>

</html>
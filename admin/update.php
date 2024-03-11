<?php
session_start();
if (!isset($_SESSION['name'])) {
  header('location:login.php');
}

include "../connect.php";

$ids = $_GET['id'];
$showquery = "SELECT * FROM `booking` where id ={$ids} ";
$mquery = mysqli_query($conn, $showquery);
$arrdata = mysqli_fetch_array($mquery);

if (isset($_POST['submit'])) {
  $touristName = $_POST['touristName'];
  $touristEmail = $_POST['touristEmail'];
  $touristContact = $_POST['touristContact'];
  $touristPreferences = $_POST['touristPreferences'];
  $insert = "UPDATE `booking` SET `tourist_name`='$touristName',`tourist_cell_number`='$touristContact',`tourist_email`='$touristEmail',`tourist_preferences`='$touristPreferences' where id ={$ids} ";
  $result = mysqli_query($conn, $insert);
  if ($result) {
    header("location:tourist.php");
  } else {
?>
    <script>
      alert("Something went wrong");
    </script>
<?Php
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>BTVTMS</title>
</head>

<body>
<input type="hidden" value="<?php echo $_SESSION['name'];  ?>">
    <div class="container-fluid main">
        <div class="row">
            <div class="col-md-12 bg-success">
                <h4 class="text-center text-warning">Beyond The Valley Tourism Management System</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 bg-primary">
                <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><?php #echo $_SESSION['name'];?></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="tourist.php">Tourist</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <a href="../logout.php" class="btn btn-outline-danger" type="submit">logout</a>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    <div class="container">
        <div class="row"> 
            <div class="col-md-12" id="form">
            <form method="POST" action="">
                <span id="form_heading">Update Details</span>
                <span>Name</span>
                <input class="userInput" type="text" name="touristName" value="<?php echo $arrdata['tourist_name']; ?>" required>
                <span>Email</span>
                <input class="userInput" type="email" name="touristEmail" value="<?php echo $arrdata['tourist_email']; ?>" required>
                <span>Phone</span>
                <input class="userInput" type="tel" name="touristContact" value="<?php echo $arrdata['tourist_cell_number']; ?>" required>
                <span>Share your Preferences</span>
                <textarea class="userInput" name="touristPreferences" required><?php echo $arrdata['tourist_preferences']; ?></textarea>
                <input class="userInput btn-success btn-outline-success" id="input_submit" type="submit" name="submit" value="Update">
            </form>
            </div>
        </div>
    </div>
    <!--Footer Start-->
    <div class="container-fluid animate__animated animate__fadeInUp footer">
        <div class="row">
            <div class="col-md text-end mt-3">
                <a href="#home">Back To Top <i class="bi bi-arrow-up-circle-fill"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <h5>Office</h5>
                <p>Iqbal Town commercial Market Gujar Khan.</p>
            </div>
            <div class="col-md-4 text-center footer-slink">
                <h5>SOCIAL LINKS</h5>
                <ul>
                    <li>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 text-center">
                <h5>For Help</h5>
                <p>12345678910<br><br>info@ourwebsite.pk</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4 text-center">
                &copy; 2023 All rights reserved by Nadia Urooj
            </div>
        </div>
    </div>
</body>

</html>
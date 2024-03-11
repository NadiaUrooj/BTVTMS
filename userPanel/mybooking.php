<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('location:login.php');
} ?>

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
    <title>Beyond the valley tourism management system</title>
</head>

<body>
    <div class="container m-container" id="home">
        <div class="row top-bar animate__animated animate__fadeInDown">
            <div class="col-md-12 bg-success text-center text-white">
                <h3>Beyond the valley tourism management system</h3>
            </div>
        </div>
        <div class="row animate__animated animate__fadeInUp mt-3">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><?php echo $_SESSION['name']; ?></a>
                        <input type="hidden" value="<?php echo $_SESSION['id']; ?>">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="mybooking.php">My Booking</a>
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
    </div>
    <div class="container">
        <div class="row">
            <table class="table table table-success table-striped mt-5">
                <tbody>

                    <thead>
                        <tr class="text-center">
                        <th>Id</th>
                        <th>Tourist Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        </tr>
                    </thead>

                    <?php
                    include "../connect.php";

                    $ids = $_SESSION['id'];;
                    $showquery = "SELECT * FROM `booking` where id ={$ids} ";
                    $mquery = mysqli_query($conn, $showquery);

                    while ($arrdata = mysqli_fetch_array($mquery)) {

                    ?>
                        <tr class="text-center">
                            <td><?php echo $arrdata['id']; ?></td>
                            <td><?php echo $arrdata['tourist_name']; ?></td>
                            <td><?php echo $arrdata['tourist_cell_number']; ?></td>
                            <td><?php echo $arrdata['tourist_email']; ?></td>

                        </tr>
                </tbody>
            </table>
        <?php
                    }
        ?>
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
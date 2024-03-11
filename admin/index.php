<?php

session_start();
if(!isset($_SESSION['name'])){
  header('location:admin_login.php');
}

include '../connect.php';

if(isset($_POST['submit'])){
    $place = $_POST['place'];
    $country = $_POST['country'];
    $charges = $_POST['charges'];
    $duration = $_POST['duration'];

    $insert = "INSERT INTO `packages`(`name`, `country`, `charges`, `duration`) VALUES ('$place','$country','$charges','$duration')";
    $query = mysqli_query($conn, $insert);
    if($query){
        ?>
        <script>
            alert("Recored Inserted Successfuly!");
        </script>
        <?php
        }else{
        ?>
        <script>
            alert("Something went wrong!");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
        <div class="row mt-3 text-center">
            <div class="col-md-4">
                <div class="card text-center">
                    <i class="bi bi-microsoft-teams icon"></i>
                    <div class="card-body">
                        <h5 class="card-title">Tourist</h5>
                        <a href="tourist.php" class="btn btn-outline-success">→ View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <i class="bi bi-geo-alt-fill icon"></i>
                    <div class="card-body">
                        <h5 class="card-title">Add Place</h5>
                        <a class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">→ View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal start for add place section -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Place</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label">Place:</label>
                        <div class="col-sm-10">
                            <input type="text" name="place" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label">Country:</label>
                        <div class="col-sm-10">
                            <input type="text" name="country" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label">Charges:</label>
                        <div class="col-sm-10">
                            <input type="text" name="charges" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label">Duration:</label>
                        <div class="col-sm-10">
                            <input type="text" name="duration" class="form-control" id="inputText">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-success">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal end for add place section -->

</body>

</html>
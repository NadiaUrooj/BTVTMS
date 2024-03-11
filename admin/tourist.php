<?php

session_start();
if(!isset($_SESSION['name'])){
  header('location:admin_login.php');
}

include '../connect.php';

if (isset($_POST['submit'])) {
    $place = $_POST['place'];
    $country = $_POST['country'];
    $charges = $_POST['charges'];
    $duration = $_POST['duration'];

    $insert = "INSERT INTO `packages`(`name`, `country`, `charges`, `duration`) VALUES ('$place','$country','$charges','$duration')";
    $query = mysqli_query($conn, $insert);
    if ($query) {
?>
        <script>
            alert("Recored Inserted Successfuly!");
        </script>
    <?php
    } else {
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
    <title>Beyond the valley tourism management system</title>
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
                        <a class="navbar-brand" href="#"><?php #echo $_SESSION['name']; 
                                                            ?></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Tourist</a>
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
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Package ID</th>
                                <th scope="col">Preferences</th>
                                <th scope="col">Opration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "../connect.php";

                            $q = " SELECT * FROM `booking`";
                            $query = mysqli_query($conn, $q);
                            $num = mysqli_num_rows($query);
                            
                            while ($res = mysqli_fetch_array($query)) {
                            ?>
                                <tr class="text-center">
                                    <td><?php echo $res['tourist_name']; ?></td>
                                    <td><?php echo $res['tourist_email']; ?></td>
                                    <td><?php echo $res['tourist_cell_number']; ?></td>
                                    <td><?php echo $res['package_id']; ?></td>
                                    <td><?php echo $res['tourist_preferences']; ?></td>
                                    <td><span><a href="update.php?id=<?php echo $res['id']; ?>" class="btn btn-warning">Edit</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
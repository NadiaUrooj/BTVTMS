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
    <link rel="stylesheet" href="css/style.css">
    <title>BTVTMS</title>
</head>

<body>
    <div class="container m-container" id="home">
        <div class="row top-bar animate__animated animate__fadeInDown">
            <div class="col-md-12 bg-success text-center text-white">
                <h3>Beyond The Valley Tourism Management System</h3>
            </div>
        </div>
        <div class="row animate__animated animate__fadeInUp mt-3">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">BTVTMS</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            </ul>
                            <form class="d-flex">
                                <a href="login.php" class="btn btn-outline-success" type="submit">login</a>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 news-alert bg-warning">
                News
            </div>
            <div class="col-md-7">
                <marquee class="mt-2" direction="left">
                    🌞 Dive into summer bliss! Exclusive beachfront deals await. Book your sunny escape now! 🏖️ &nbsp;&nbsp;&nbsp;&nbsp; ❄️ Embrace the winter wonderland! Cozy cabins, snow-capped peaks, and hot cocoa by the fireplace. Your perfect winter getaway is here!
                    ⛷️ &nbsp;&nbsp;&nbsp;&nbsp; 🍁 Fall into autumn adventures! Witness the beauty of changing leaves and savor seasonal delights. Book your fall retreat today! 🍂 &nbsp;&nbsp;&nbsp;&nbsp; 🌧️ Rain or shine, your dream vacation awaits!
                    Explore our all-weather packages for an unforgettable travel experience. ☔ &nbsp;&nbsp;&nbsp;&nbsp; ⛅ Enjoy springtime blooms and refreshing breezes. Discover our spring specials for a rejuvenating escape! 🌷
                </marquee>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img height="400" src="img/slide_2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img height="400" src="img/slide_3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img height="400" src="img/slide_4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img height="400" src="img/slide_1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img height="400" src="img/slide_5.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md message text-center">
                <h3>Happy Clients</h3>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/ZmCm_TzTBWY?si=QIKbYyrsSPbdZn6m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-4 text-center">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/UKAPBE_HkOk?si=jS7fOz7g0BJsaSA7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-4 text-center">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/-dbVN_Z2iIU?si=l9MeQhkEcR0echZ2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md">
                <h6 class="text-center mt-2 more-vidoes"><a href="https://www.youtube.com/channel/UCy0bld9dwrn9_5oDtyogmtw" target="_blank">More Videos</a></h6>
            </div>
        </div>
        <div class="row animate__animated animate__fadeInUp mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                include "connect.php";
                $q = "SELECT * FROM `packages`";
                $query = mysqli_query($conn, $q);
                $num = mysqli_num_rows($query);

                while ($result = mysqli_fetch_array($query)) {
                    echo '<div class="col-md-4 mt-4">';
                    echo '<div class="card text-center">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">'.$result["name"]."<span>" . $result["country"] .'</span></h5>';
                    echo '<p class="card-text">Charges : <span>' . $result["charges"] . ' /-PKR</span</p>';
                    echo '<p class="card-text">Duration :<span>' . $result["duration"] . ' Days</span></p>';
                    echo '<strong>Go Ahead and make chill life</strong><br>';
                    echo '<a href="login.php" type="button" class="btn d-grid btn-outline-success card-btna">Book Now</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md mt-5 message">
                <h3 class="text-center">Short Message For New Comers</h3>
                <p class="animate__animated animate__zoomIn">Welcome, dear explorers! Whether you're stepping into our travel community for the first time or you're a seasoned adventurer, we're thrilled to have you with us. This space is all about sharing your travel stories, asking questions, and
                    connecting with fellow wanderers. Dive into the conversations, seek advice, and let the camaraderie of exploration unfold. Your journey starts here, and we can't wait to hear about the destinations that have captured your heart and
                    the adventures that await you. Feel free to make this space your own, and may every interaction bring you closer to the wonders of the world. Happy exploring!</p>
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
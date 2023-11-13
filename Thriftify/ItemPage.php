<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "database";

$con = new MySQLi($host, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Product Name</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark.css">
    <link rel="stylesheet" href="assets/css/Pretty-Login-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Product-Details.css">
    <link rel="stylesheet" href="assets/css/Projects-Grid-Horizontal.css">
    <link rel="stylesheet" href="assets/css/responsive-navbar.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="font-family: 'Bebas Neue', serif;">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3" style="border-color: #1e1e1e; border-top-color: rgb(33,37,41); border-left-color: 37;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="HomePage.php"><span class="fs-1">Thriftify</span></a>
            <div class="btn-group" role="group">
                <?php
                if (isset($_SESSION["user_id"])) {
                    // If the user is logged in, show the profile dropdown
                    echo '<div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="background: #1e1e1e;border-color: var(--bs-white);font-size: 24px; z-index: 2;"> 
                                ' . $_SESSION["user_name"] . '
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown" style="z-index: 2;">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="MyListings.php">My Listings</a></li>
                                <li><a class="dropdown-item" href="Wishlist.php">Wishlist</a></li>
                                <li><a class="dropdown-item" href="messages.php">Messages</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </div>';
                } else {
                    // If the user is not logged in, show Sign In and Register buttons
                    echo '<a class="btn btn-primary btn-lg ms-md-2" role="button" data-bss-hover-animate="pulse" href="login.php" style="background: #1e1e1e;border-color: var(--bs-white);font-size: 24px;">Sign In</a>
                        <a class="btn btn-primary btn-lg ms-md-2" role="button" data-bss-hover-animate="pulse" href="RegisterForm.html" style="background: #1e1e1e;border-color: var(--bs-white);font-size: 24px;">Register</a>';
                }
                ?>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center">Product Name</h1>
        <div class="row">
            <div id="imageCarousel" class="carousel slide col-md-7" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-thumbnail img-fluid center-block" src="public/5. Vintage/1.jpg" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img class="img-thumbnail img-fluid center-block" src="public/5. Vintage/1.1.jpg" alt="Image 2">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#imageCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>            
            <div class="col-md-5">
                <h2>Description</h2>
                <p>Product Description</p>
                <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" type="button" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Seller Picture">
                    <div>
                        <p class="fw-bold mb-0" type="button">Seller Name</p>
                        <p class="text-muted mb-0" type="button">Location</p>
                    </div>
                </div>
                <h2 class="text-center" style="color: var(--bs-blue);">PHP</h2>
                <div class="row">
                    <div class="col text-end"><button class="btn btn-lg center-block text-light" type="button" style="background: #1e1e1e;" data-bss-hover-animate="pulse">Add to Wishlist</button></div>
                    <div class="col text-start"><button class="btn btn-lg center-block text-light" type="button" style="background: #1e1e1e;" data-bss-hover-animate="pulse">Message</button></div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="border rounded border-0 d-flex flex-column justify-content-center align-items-center p-4 py-5" style="height: 500px;background: url(public/dior-fall-mens-2020-campaign-6900x687-1@2x.png) center / cover;"></div>
        </div>
        <footer class="text-center py-4">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col w-100">
                        <ul class="list-inline my-2">
                            <li class="list-inline-item"><a class="link-secondary btn" type="button" href="PrivacyPolicyPage.php">Privacy Policy</a></li>
                            <li class="list-inline-item"><a class="link-secondary btn" type="button" href="TermsOfUsePage.php">Terms of Use</a></li>
                            <li class="list-inline-item"><a class="link-secondary btn" type="button" href="ContactPage.php">Contact</a></li>
                            <li class="list-inline-item"><a class="link-secondary btn" type="button" href="AboutPage.php">About</a></li>
                        </ul>
                    </div>
                    <div class="col offset-lg-4">
                        <p class="text-muted my-2">Copyright&nbsp;© 2023 Thriftify</p>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
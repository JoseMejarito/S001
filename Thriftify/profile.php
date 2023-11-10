<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', true);

$host = "localhost";
$username = "root";
$password = "";
$database = "database";

$con = new MySQLi($host, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$user_id = $_SESSION['user_id'];

// Retrieve user information
$query = "SELECT * FROM users WHERE user_id = '$user_id'";
$result = $con->query($query);

if ($result) {
    $user = $result->fetch_assoc();
} else {
    echo "Error: " . $query . "<br>" . $con->error;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newName = $_POST["newName"];
    $newEmail = $_POST["newEmail"];
    $newPassword = $_POST["newPassword"];

    // Update user information
    $updateQuery = "UPDATE users SET name = '$newName', email = '$newEmail', password = '$newPassword' WHERE user_id = '$user_id'";
    $updateResult = $con->query($updateQuery);

    if ($updateResult) {
        // Redirect to the profile page or handle success accordingly
        header("Location: profile.php");
        exit();
    } else {
        echo "Error: " . $updateQuery . "<br>" . $con->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark.css">
    <link rel="stylesheet" href="assets/css/Pretty-Login-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
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
                        $current_page = basename($_SERVER['PHP_SELF']);
                        if ($current_page == 'MyListings.php') {
                            echo '<a href="NewListing.php" class="btn btn-primary ms-md-2" role="button" data-bss-hover-animate="pulse" style="background: #1e1e1e;border-color: var(--bs-white);font-size: 24px;">New Listing</a>';
                        }
                } else {
                    echo '<a class="btn btn-primary btn-lg ms-md-2" role="button" data-bss-hover-animate="pulse" href="login.php" style="background: #1e1e1e;border-color: var(--bs-white);font-size: 24px;">Sign In</a>
                        <a class="btn btn-primary btn-lg ms-md-2" role="button" data-bss-hover-animate="pulse" href="RegisterForm.html" style="background: #1e1e1e;border-color: var(--bs-white);font-size: 24px;">Register</a>';
                }
                ?>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h2>Edit Profile</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="newName" class="form-label">New Name</label>
                <input type="text" class="form-control" id="newName" name="newName" value="<?php echo $user['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="newEmail" class="form-label">New Email</label>
                <input type="email" class="form-control" id="newEmail" name="newEmail" value="<?php echo $user['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="newPassword" class="form-label">New Password</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword" required>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="border rounded border-0 d-flex flex-column justify-content-center align-items-center p-4 py-5" style="height: 500px;background: url(&quot;assets/img/dior-fall-mens-2020-campaign-6900x687-1@2x.png&quot;) center / cover;"></div>
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

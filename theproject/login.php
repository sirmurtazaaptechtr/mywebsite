<?php
session_start();
function pr ($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'northwind';

if($conn = mysqli_connect($hostname, $username, $password, $database)) {
    echo "<p>$database connected successfully!</p>";
}

$Username = $Password = '';
$Errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['Username'])) {
        array_push($Errors, "Username is required");
    }else {
        $Username = test_input($_POST['Username']);
    }

    if(empty($_POST['Password'])) {
        array_push($Errors, "Password is required");
    }else {
        $Password = test_input($_POST['Password']);
    }
    
    $sql = "SELECT * FROM logins WHERE Username = '$Username'";
    $logins = mysqli_query($conn, $sql);

    if(mysqli_num_rows($logins) > 0) {
        $row = mysqli_fetch_assoc($logins);
        if($Password == $row['Password']) {
            $_SESSION['isLogin'] = true;
            $_SESSION['LoginID'] = $row['LoginID'];
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['Type'] = $row['Type'];
            $_SESSION['UserID'] = $row['UserID'];
            header("Location:dashboard.php");
            exit();
        }else {
            array_push($Errors, "Password is incorrect");            
        }
    }else {
        array_push($Errors, "Username is incorrect");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - MyWebsite</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">

    <!-- Quill CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.snow.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.bubble.css">

    <!-- Remixicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">

    <!-- Simple DataTables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">My Website</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>
                                    <!-- Dismissible Bootstrap Alert for Errors -->
                                    <?php if (!empty($Errors)) { ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <h5 class="alert-heading mb-2">Please fix the following errors:</h5>
                                        <ul class="mb-0 ps-3">
                                            <?php foreach ($Errors as $Error) { ?>
                                            <li><?php echo htmlspecialchars($Error); ?></li>
                                            <?php } ?>
                                        </ul>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    <?php } ?>

                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"
                                        class="row g-3 needs-validation" novalidate>

                                        <div class="col-12">
                                            <label for="username" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input 
                                                    type="text" 
                                                    name="Username" 
                                                    class="form-control" 
                                                    id="username"
                                                    value="<?php echo $Username; ?>"
                                                    required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input 
                                                type="password" 
                                                name="Password" 
                                                class="form-control" 
                                                id="password"
                                                value="<?php echo $Password;?>"
                                                required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Don't have account? <a
                                                    href="pages-register.html">Create an account</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <!-- ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Bootstrap 5 Bundle JS (Includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart.js (UMD build) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- ECharts -->
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.5.0/dist/echarts.min.js"></script>

    <!-- Quill JS -->
    <script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js"></script>

    <!-- Simple DataTables -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>

    <!-- TinyMCE -->
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js"></script>

    <!-- PHP Email Form (Custom template script - local file only) -->
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
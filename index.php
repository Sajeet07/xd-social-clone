<?php require('connection/config.php'); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>XD-Social | Share your thoughts to the world.</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bicon.min.css">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/flaticon.css">
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plyr.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
    <!-- light gallery css -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="bg-transparent">

    <main>
        <div class="main-wrapper pb-0 mb-0">
            <div class="timeline-wrapper">
                <div class="timeline-header">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-6">
                                <div class="timeline-logo-area d-flex align-items-center">
                                    <div class="timeline-logo">
                                        <a href="index.html">
                                            <img src="assets/images/logo/logo.png" alt="timeline logo">
                                        </a>
                                    </div>
                                    <div class="timeline-tagline">
                                        <h6 class="tagline">It’s helps you to connect and share with the people in your life</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            <form action="process/loginprocess.php" class="login-area" method="POST" enctype="multipart/form-data">
                                <div class="row align-items-center">
                                        <div class="col-12 col-sm">
                                            <input type="text" name="email" placeholder="Email" class="single-field">
                                        </div>
                                        <div class="col-12 col-sm">
                                            <input type="password" name="password" placeholder="Password" class="single-field">
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <button class="login-btn" type="submit" name="submit">Login</button>
                                        </div>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-page-wrapper">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="timeline-bg-content bg-img" data-bg="assets/images/login-background.jpg">
                                    <h3 class="timeline-bg-title">Let’s see what’s happening to you and your world. Welcome in XD-Social.</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
                                <div class="signup-form-wrapper">
                                    <h1 class="create-acc text-center">Create An Account</h1>
                                    <?php
                                    if(isset($_POST['submit'])) {
                                        $name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $username = $_POST['username'];
                                        $password = md5($_POST['password']);

                                        if($name!="" && $email!="" && $username!="" && $password!="")
                                        {
                                            $create_query = "INSERT INTO users(name,email,username,password) VALUES('$name','$email','$username','$password')";
                                            $create_result = mysqli_query($conn,$create_query);
                                            if($create_result)
                                            {
                                                echo "Your account is created successfully.";
                                            }
                                            else 
                                            {
                                                echo "Your account creation failed. Please Try Again.";
                                            }
                                        }
                                        else 
                                        {
                                            echo "All fields are necessary.";
                                        }

                                    }
                                    ?>
                                    <div class="signup-inner text-center">
                                        <h3 class="title">Wellcome to XD-Social</h3>
                                        <form class="signup-inner--form" action="#" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="text" name="name" class="single-field" placeholder="Name">
                                                </div>
                                                <div class="col-12">
                                                    <input type="email" name="email" class="single-field" placeholder="Email">
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" name="username" class="single-field" placeholder="Username">
                                                </div>
                                                <div class="col-12">
                                                    <input type="password" name="password" class="single-field" placeholder="Password">
                                                </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="submit-btn" type="submit" name="submit">Create Account</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- audio video player JS -->
    <script src="assets/js/plugins/plyr.min.js"></script>
    <!-- perfect scrollbar js -->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- light gallery js -->
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>
    <!-- image loaded js -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- isotope filter js -->
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
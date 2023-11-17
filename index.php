<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Event Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Event Management" name="description" />
    <meta content="Event Management" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/aos.css" rel="stylesheet">

</head>

<body>
    <div class="login-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1 order-2">
                    <div class="login-right-div">
                        <div class="login-form">
                            <h2>Login</h2>
                            <p>Welcome Back ! please enter your details.</p>

                            <form class="form-horizontal" action="event.php">

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                    <label class="form-check-label" for="remember-check">
                                            Remember me
                                        </label>
                                </div>

                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <h5 class="font-size-14 mb-3">Sign in with</h5>

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                <i class="mdi mdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4 text-center">
                                    <a href="forgotpw.php" class="text-muted link-clr"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <div class="login-left-div">
                        <img src="assets/images/login.png" alt="">
                    </div>
                </div>

            </div>


        </div>
        <div class="mt-4 text-center login-bottom">
            <div>
                <p>Don't have an account ? <a href="register.php" class="fw-medium text-primary"> Signup now </a> </p>
                <!-- <p>© <script>document.write(new Date().getFullYear())</script> All Rights Reserved. Design & Develop by Veuz concepts.</p> -->
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        $(function() {
            setTimeout(function() {
                $("#loading").hide();
            }, 500)

        })
    </script>
</body>

</html>
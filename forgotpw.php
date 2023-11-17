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

    </head>

    <body>
        <div class="login-page">
            <div class="container px-0">
                <div class="row">
                    <div class="col-md-6 order-md-1 order-2">
                        <div class="login-right-div">
                            <div class="login-form">
                                <h2>Forgot Password</h2>
                                <p>Enter your email and we will send you a OTP to reset your password.</p>

                                <form class="form-horizontal" action="otp.php">
        
                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="useremail" placeholder="Enter email" required>  
                                        <div class="invalid-feedback">
                                            Please Enter Email
                                        </div>      
                                    </div>
                                    
                                    <div class="mt-3 d-grid">
                                      <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button> 
                                    </div>
        
                                    
                                    <div class="mt-4 text-center login-bottom">
                                        <a href="index.php" class="text-muted"><i class="mdi mdi-chevron-left me-1"></i> Back to login</a>
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
                    <p>Don't have an account ? <a href="register.php" class="fw-medium text-primary "> Signup now </a> </p>
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
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
            $(function () {
                setTimeout(function () {
                    $("#loading").hide();
                }, 500)

            })
        </script>
    </body>
</html>

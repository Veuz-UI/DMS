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
                            <p>Please enter the OTP to verify your mail.</p>

                            <form class="form-horizontal" action="resetpw.php">

                                <div class="mb-2">
                                    <label for="useremail" class="form-label">OTP</label>
                                    <div class="d-flex otp-input justify-content-between">
                                        <input id="otp-first" class="form-control" type="number" min="0" max="9" step="1" aria-label="first digit" />
                                        <input id="otp-second" class="form-control" type="number" min="0" max="9" step="1" aria-label="second digit" />
                                        <input id="otp-third" class="form-control" type="number" min="0" max="9" step="1" aria-label="third digit" />
                                        <input id="otp-fourth" class="form-control" type="number" min="0" max="9" step="1" aria-label="fourth digit" />
                                    </div>
                                    <div class="invalid-feedback">
                                        Please Enter OTP
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
        $(function() {
            setTimeout(function() {
                $("#loading").hide();
            }, 500)

        })
    </script>



    <!-- otp script -->
    <script>
        console.clear();
        let inputs = document.querySelectorAll("input");
        let values = Array(4);
        let clipData;
        inputs[0].focus();

        inputs.forEach((tag, index) => {
            tag.addEventListener('keyup', (event) => {
                if (event.code === "Backspace" && hasNoValue(index)) {
                    if (index > 0) inputs[index - 1].focus();
                }

                //else if any input move focus to next or out
                else if (tag.value !== "") {
                    (index < inputs.length - 1) ? inputs[index + 1].focus(): tag.blur();
                }

                //add val to array to track prev vals
                values[index] = event.target.value;
            });

            tag.addEventListener('input', () => {
                //replace digit if already exists
                if (tag.value > 10) {
                    tag.value = tag.value % 10;
                }
            });

            tag.addEventListener('paste', (event) => {
                event.preventDefault();
                clipData = event.clipboardData.getData("text/plain").split('');
                filldata(index);
            })
        })

        function filldata(index) {
            for (let i = index; i < inputs.length; i++) {
                inputs[i].value = clipData.shift();
            }
        }

        function hasNoValue(index) {
            if (values[index] || values[index] === 0)
                return false;

            return true;
        }
    </script>
</body>

</html>
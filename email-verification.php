<?php include 'partials/auth-header.php'; ?>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
        <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-5 login_two_image1">
                <div class="header d-flex align-items-center mb-29">
                    <img src="assets/images/logo/logo-new.png" alt="logo" class="">

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mb-2 smart">Smart your <br> journey with us</h2>
                    </div>
                    <div class="col-md-6">
                        <p class="these">Complete these quick steps to get started</p>
                    </div>
                </div>



                  <?php include 'partials/steps.php'; ?>
            </div>

            <!-- Right Half: Additional Content -->

            <div class="col-xl-6 p-0">
                <div class="login-card login-dark login-bg">
                    <div>

                        <div class="login-main">
                            <form class="theme-form">
                                <h2 class="text-center welcome">Verify your Email</h2>
                                <p class="text-center entry">code have been sent to your given email <br> <strong>
                                        ”abc@xyz.com”</strong></p>
                                
                                <div class="container1">
                                    <div class="box">5</div>
                                    <div class="box">4</div>
                                    <div class="box">7</div>
                                    <div class="dash">–</div>
                                    <div class="box">3</div>
                                    <div class="box empty">0</div>
                                    <div class="box empty">0</div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group mb-0 checkbox-checked">
                                    <p class="text text-center">Resend code in <span class="text">45s </span> </p>

                                    <div class="text-end mt-3">
                                        <button class="create-btn  w-100" type="submit"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                viewBox="0 0 26 26" fill="none">
                                                <path
                                                    d="M13 2.6499V4.1874M7.87495 23.1499L13 20.0749L18.125 23.1499M13 18.8224V23.1499M3.26245 12.3874C3.26245 15.2861 3.26245 16.7365 4.16343 17.6364C5.06338 18.5374 6.51375 18.5374 9.41245 18.5374H16.5875C19.4862 18.5374 20.9365 18.5374 21.8365 17.6364C22.7375 16.7365 22.7375 15.2861 22.7375 12.3874V10.3374C22.7375 7.4387 22.7375 5.98833 21.8365 5.08838C20.9365 4.1874 19.4862 4.1874 16.5875 4.1874H9.41245C6.51375 4.1874 5.06338 4.1874 4.16343 5.08838C3.26245 5.98833 3.26245 7.4387 3.26245 10.3374V12.3874Z"
                                                    stroke="white" stroke-width="1.5375" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg> Verify email </button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script>
            function goToStep() {
                window.location.href = "step1.html";
            }
        </script>
        <?php include 'partials/auth-footer.php'; ?>
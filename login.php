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
            <div class="col-xl-5 login_two_image"></div>
            <div class="col-xl-7 p-0">
                <div class="login-card login-dark login-bg">
                    <div>

                        <div class="login-main">
                            <form class="theme-form">
                                <h2 class="text-center welcome">Welcome!</h2>
                                <p class="text-center entry">Design an entirely new ppt on your own voice.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="social-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                                viewBox="0 0 29 29" fill="none">
                                                <path
                                                    d="M26.253 14.3C26.253 7.72203 20.9143 2.38336 14.3363 2.38336C7.75834 2.38336 2.41968 7.72203 2.41968 14.3C2.41968 20.0677 6.51901 24.8701 11.953 25.9784V17.875H9.56968V14.3H11.953V11.3209C11.953 9.02095 13.8239 7.15003 16.1238 7.15003H19.103V10.725H16.7197C16.0643 10.725 15.528 11.2613 15.528 11.9167V14.3H19.103V17.875H15.528V26.1571C21.5459 25.5613 26.253 20.4848 26.253 14.3Z"
                                                    fill="black" />
                                            </svg>
                                            Facebook
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="social-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                                viewBox="0 0 29 29" fill="none">
                                                <path
                                                    d="M26.0212 11.9662H25.0613V11.9167H14.3363V16.6834H21.0711C20.0885 19.4582 17.4484 21.45 14.3363 21.45C10.3878 21.45 7.18634 18.2486 7.18634 14.3C7.18634 10.3514 10.3878 7.15003 14.3363 7.15003C16.159 7.15003 17.8172 7.83762 19.0798 8.96077L22.4504 5.59014C20.3221 3.60661 17.4752 2.38336 14.3363 2.38336C7.75537 2.38336 2.41968 7.71905 2.41968 14.3C2.41968 20.881 7.75537 26.2167 14.3363 26.2167C20.9173 26.2167 26.253 20.881 26.253 14.3C26.253 13.501 26.1708 12.7211 26.0212 11.9662Z"
                                                    fill="#FFC107" />
                                                <path
                                                    d="M3.7937 8.75342L7.70892 11.6247C8.76831 9.00188 11.334 7.15003 14.3364 7.15003C16.159 7.15003 17.8172 7.83762 19.0798 8.96077L22.4504 5.59014C20.3221 3.60661 17.4752 2.38336 14.3364 2.38336C9.75918 2.38336 5.78974 4.96749 3.7937 8.75342Z"
                                                    fill="#FF3D00" />
                                                <path
                                                    d="M14.3364 26.2167C17.4144 26.2167 20.2113 25.0387 22.3259 23.1231L18.6377 20.0021C17.4013 20.943 15.89 21.4517 14.3364 21.45C11.2368 21.45 8.60503 19.4736 7.61356 16.7155L3.72754 19.7096C5.69975 23.5688 9.70494 26.2167 14.3364 26.2167Z"
                                                    fill="#4CAF50" />
                                                <path
                                                    d="M26.0213 11.9661H25.0614V11.9167H14.3364V16.6834H21.0711C20.6011 18.004 19.7546 19.158 18.636 20.0027L18.6377 20.0015L22.326 23.1225C22.065 23.3597 26.2531 20.2584 26.2531 14.3C26.2531 13.501 26.1709 12.7211 26.0213 11.9661Z"
                                                    fill="#1976D2" />
                                            </svg>
                                            Google
                                        </button>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <img class="w-100" src="assets/images/login/line.png" alt="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="login[password]" required=""
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"> </span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 checkbox-checked">
                                    <p class="text">Password should be combination of number, letters and other
                                        characters consisting
                                        of 8-16 characters.</p>

                                    <div class="text-end mt-3">
                                        <button class="create-btn  w-100" type="submit"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                viewBox="0 0 26 26" fill="none">
                                                <path
                                                    d="M13 2.6499V4.1874M7.87495 23.1499L13 20.0749L18.125 23.1499M13 18.8224V23.1499M3.26245 12.3874C3.26245 15.2861 3.26245 16.7365 4.16343 17.6364C5.06338 18.5374 6.51375 18.5374 9.41245 18.5374H16.5875C19.4862 18.5374 20.9365 18.5374 21.8365 17.6364C22.7375 16.7365 22.7375 15.2861 22.7375 12.3874V10.3374C22.7375 7.4387 22.7375 5.98833 21.8365 5.08838C20.9365 4.1874 19.4862 4.1874 16.5875 4.1874H9.41245C6.51375 4.1874 5.06338 4.1874 4.16343 5.08838C3.26245 5.98833 3.26245 7.4387 3.26245 10.3374V12.3874Z"
                                                    stroke="white" stroke-width="1.5375" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg> Sign in </button>
                                    </div>
                                </div>

                                <p class="mt-4 mb-0 text-center text">Don't have account? &nbsp;<a class="bold"
                                        href="sign-up.php">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery-->
       

        <?php include 'partials/auth-footer.php'; ?>
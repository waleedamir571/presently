<?php include 'partials/header.php'; ?>


<style>

    html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}
body {
    /* background-image: url(./assets/images/logo/Waitlist.png); */
    background-image: url(./assets/images/logo/Waitlist3.png);
    background-repeat: no-repeat;
    background-repeat: no-repeat;
    background-size: cover;      /* full screen fill kare */
    background-position: center; /* image center me rahe */
    overflow-y: auto;            /* vertical scroll enable */
    overflow-x: hidden;    
}
    .footer {
        background-color: #fbe6e9;
        padding: 10px;
        text-align: center;
        color: #c6364e;
        font-weight: 600;
        border-top: 1px solid #f1cdd0;
        display: none;
    }

    .page-sidebar {
    margin-top: 77px;
    position: fixed;
    top: 0;
    display: none;
    left: 0;
    width: 253px;
    height: 100vh;
    box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.1);
    z-index: 3;
    background: var(--white);
    transition: 0.5s all;
}

    .page-header {
    width: 100%;
    margin: 0;
    /* box-shadow: 0px 4px 34px rgba(10, 75, 85, 0.05); */
    background-image: url(../images/logo/bg.png);
    display: none;
}



@media (min-width: 320px) and (max-width: 768px) {
    body {
    background-image: url(./assets/images/logo/Waitlist.png);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-position: bottom;
    background-attachment: fixed;
    background: linear-gradient(92deg, rgba(169, 49, 120, 0.05) -20.41%, rgba(249, 157, 68, 0.05) 121.3%);
}

}

</style>

<div class="app-container d-flex" >


    <!-- Left Sidebar -->


    <!-- Main Content -->
    <main class="flex-grow-1  p-3 main-content">
        <div class="container">
            <div class="main-card rounded-4 bg-gradient-custom p-3 position-relative overflow-hidden">

                <!-- Decorative box -->
                <!-- <div class="position-absolute top-0 end-0 opacity-25 mt-3 me-4">
            <div
              style="width: 100px; height: 60px; border: 2px solid gray; transform: rotate(12deg); border-radius: 0.5rem;">
            </div>
          </div> -->

                <!-- Title -->
                <div class="text-center mb-5">
                    <img src="assets/images/logo/logo.png" alt="">
                </div>
                <section class="text-center align-items-center  px-4 ">
                    <div class="greeting text-center">
                        <h1 class="text-center">Get Early <span class="samrah">Access</span></h1>
                        <p class="text1 text-center">  We’re opening soon! Sign up now to get two months of PreZently Premium for free.</p>
                    </div>




                </section>
                 <div class="container">
                        <div class="row pt-3 pb-3">
                            <div class="col-md-4 pb-15">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your full name">
                            </div>
                            <div class="col-md-4 pb-15">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Email">
                            </div>
                            <div class="col-md-4">
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter your phone number">
                            </div>
                        </div>
                    </div>
                <div class="controls1 text-center">

                   

                   <div class="pb-15">
                    <button class="import-btn11 "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                            viewBox="0 0 24 25" fill="none">
                            <path
                                d="M17.49 10.0999L5.6 17.2699C4.9 17.6899 4 17.1899 4 16.3699V8.36989C4 4.87989 7.77 2.69989 10.8 4.43989L15.39 7.07989L17.48 8.27989C18.17 8.68989 18.18 9.68989 17.49 10.0999Z"
                                fill="white" />
                            <path
                                d="M18.09 15.9599L14.04 18.2999L10 20.6299C8.55 21.4599 6.91 21.2899 5.72 20.4499C5.14 20.0499 5.21 19.1599 5.82 18.7999L18.53 11.1799C19.13 10.8199 19.92 11.1599 20.03 11.8499C20.28 13.3999 19.64 15.0699 18.09 15.9599Z"
                                fill="white" />
                        </svg> Watch Demo</button>
                        </div>
                    <button class="create-btn11" data-bs-toggle="modal" data-original-title="test"
                        data-bs-target="#exampleModalv1"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="23"
                            viewBox="0 0 21 23" fill="none">
                            <path
                                d="M10.5001 1.25V2.7875M5.37507 21.75L10.5001 18.675L15.6251 21.75M10.5001 17.4224V21.75M0.762573 10.9875C0.762573 13.8862 0.762573 15.3366 1.66355 16.2365C2.5635 17.1375 4.01387 17.1375 6.91257 17.1375H14.0876C16.9863 17.1375 18.4367 17.1375 19.3366 16.2365C20.2376 15.3366 20.2376 13.8862 20.2376 10.9875V8.9375C20.2376 6.0388 20.2376 4.58843 19.3366 3.68848C18.4367 2.7875 16.9863 2.7875 14.0876 2.7875H6.91257C4.01387 2.7875 2.5635 2.7875 1.66355 3.68848C0.762573 4.58843 0.762573 6.0388 0.762573 8.9375V10.9875Z"
                                stroke="white" stroke-width="1.5375" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Join waitlist </button>
                </div>

                <div class="greeting text-center">

                    <p class="sign1"><img src="assets/images/logo/people-new.png" alt=""> Join +1,000 other on the
                        waitlist</p>
                </div>

                   <div class="greeting text-center">

                   <img class="w-100" src="assets/images/logo/imgnew.png" alt="">
                </div>

                <!-- <div class="text-center mb-5">
          <img src="assets/images/voice/p21.png" alt="">
        </div> -->

                <!-- Two Column Cards -->
                <!-- <div class="row mb-4">
            <div class="col-md-6">
              <div class=" bg-opacity-75 rounded-3 p-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="bg-secondary rounded" style="width: 32px; height: 32px;"></div>
                  <div>
                    <h5 class="fw-bold text-dark mb-0">Explore New</h5>
                    <h5 class="fw-bold text-dark">Ideas</h5>
                  </div>
                </div>
                <p class="text-muted small mb-3">
                  A wonderful serenity has taken possession of my entire soul...
                </p>
                <div class="text-center">
                  <div class="bg-primary-subtle rounded d-inline-flex justify-content-center align-items-center" style="width: 64px; height: 80px;">
                    👨‍💼
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class=" bg-opacity-75 rounded-3 p-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="bg-success rounded" style="width: 32px; height: 32px;"></div>
                  <div>
                    <h5 class="fw-bold text-dark mb-0">Looks For More</h5>
                    <h5 class="fw-bold text-dark">New Things</h5>
                  </div>
                </div>
                <p class="text-muted small mb-3">
                  A wonderful serenity has taken possession of my entire soul...
                </p>
                <div class="text-center">
                  <div class="bg-success-subtle rounded d-inline-flex justify-content-center align-items-center" style="width: 64px; height: 80px;">
                    👩‍💼
                  </div>
                </div>
              </div>
            </div>
          </div> -->

                <!-- Bottom Section -->
                <!-- <div class=" bg-opacity-75 rounded-3 p-4">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="bg-danger rounded-circle text-white d-flex justify-content-center align-items-center"
                style="width: 48px; height: 48px;">£</div>
              <div class="bg-secondary rounded-circle text-white d-flex justify-content-center align-items-center"
                style="width: 48px; height: 48px;">$</div>
              <div>
                <h6 class="fw-bold text-dark mb-0">Diagram</h6>
                <h6 class="fw-bold text-dark">Infographic</h6>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <p class="text-muted small mb-0">A wonderful serenity has taken possession of my entire soul.</p>
              <div class="d-flex gap-2">
                <div class="bg-warning rounded" style="width: 32px; height: 48px;"></div>
                <div class="bg-success rounded" style="width: 32px; height: 48px;"></div>
                <div class="bg-primary rounded" style="width: 32px; height: 48px;"></div>
              </div>
            </div>
          </div> -->
            </div>
        </div>
    </main>

    <!-- Right Sidebar -->


</div>











<script>
document.addEventListener("DOMContentLoaded", function() {
  if (window.location.pathname.endsWith("waitlist.php")) {
    const wrapper = document.querySelector(".page-wrapper");
    if (wrapper) {
      wrapper.classList.remove("page-wrapper");
    }
  }
});
</script>



<?php include 'partials/footer.php'; ?>
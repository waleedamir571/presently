 <script src="assets/js/vendors/jquery/jquery.min.js"></script>
        <!-- bootstrap js-->
        <script src="assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
        <script src="assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
        <!--fontawesome-->
        <script src="assets/js/vendors/font-awesome/fontawesome-min.js"></script>
        <!-- password_show-->
        <script src="assets/js/password.js"></script>
        <!-- custom script -->
        <script src="assets/js/script.js"></script>
    </div>
</body>

</html>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".step-link");

    // Apply previously active step
    const activeStep = localStorage.getItem("activeStep");
    if (activeStep) {
        document.querySelectorAll(".card-step")[activeStep]?.classList.add("active");
    }

    links.forEach((link, index) => {
        link.addEventListener("click", function () {
            localStorage.setItem("activeStep", index);
        });
    });
});
</script>



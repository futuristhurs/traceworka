
<?php 
session_start();
$pageTitle = 'create accouunt';
include 'includes/header.php';


?>


        <!-- OffCanvas Menu End -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Register</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Register</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- login area start -->
        <div class="login-register-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <!-- <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4>login</h4>
                                </a> -->
                                <a data-bs-toggle="tab" href="register.php">
                                    <h4>register</h4>
                                </a>
                            </div>

                            <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">

                                            <form action="register-check.php" method="post">
                                            <?php
                                                    if (isset($_SESSION["success"])) {
                                                        echo '<div style="background-color: #c3e6cb; padding: 10px;">' . $_SESSION["success"] . '</div>';
                                                        unset($_SESSION["success"]); // Clear the success message from session
                                                    } elseif (isset($_GET["success"]) && $_GET["success"] == 1) {
                                                        echo '<div style="background-color: #c3e6cb; padding: 10px;">Registration successful</div>';
                                                    }
                                                
                                                    if (isset($_SESSION["error"])) {
                                                        echo '<div style="background-color: #f8d7da; padding: 10px;">' . $_SESSION["error"] . '</div>';
                                                        unset($_SESSION["error"]); // Clear the error message from session
                                                    }
                                                ?>  <br>
                                                <input type="text" name="name" placeholder="Full Name" />
                                                <input type="tell" name="phone" placeholder="Phone Number" />
                                                <input name="email" placeholder="Email" type="email" />
                                                <input type="password" name="password" placeholder="Password" />
                                                <input type="password" name="repassword" placeholder="Re-Type Password" />
                                                <div class="button-box">
                                                    <button type="submit" name= "register"><span>Register</span></button>
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
        </div>
        <!-- login area end -->
        <!-- Footer Area Start -->
        
        <?php include 'includes/footer.php'?>
        <!-- Footer Area End -->
    </div>
    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/scrollUp.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/mailchimp-ajax.js"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from htmldemo.net/hmart/hmart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 08:38:05 GMT -->
</html>
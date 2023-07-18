        <!-- login area start -->
        <div class="login-register-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4>login</h4>
                                </a>
                                
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="login-check.php" method="post">

                                            <?php
                                                    // session_start();

                                                    // Display error message if there was an error
                                                    if (isset($_SESSION["error"])) {
                                                        echo '<div style="background-color: #f8d7da; padding: 10px;">' . $_SESSION["error"] . '</div>';
                                                        unset($_SESSION["error"]); // Clear the error message
                                                    }
                                                ?>
                                                <br>
                                               

                                                <input name="email" placeholder="Email" type="email"  />
                                                <input type="password" name="password" placeholder="Password" />
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox" />
                                                        <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit" name="logins"><span>Login</span></button>
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
        
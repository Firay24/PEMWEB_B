    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container" style="margin-top:100px">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title" style="margin-top:15px">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form" action="<?= BASEURL; ?>/Login/login">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php Flasher::flash();?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username"></label>
                                <input type="text" name="username" id="username" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="password"></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <a href="<?= BASEURL; ?>/register" class="signup-image-link" style="font-size:13px;">Create an account</a>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" name="signin" id="signin" class="form-submit" style="background-color:black;font-family:Poppins;">
                                <a style="color:white;text-decoration:none">Login</a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

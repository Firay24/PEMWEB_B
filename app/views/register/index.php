<div class="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" name="name" id="name" placeholder="Nama"/>
                        </div>
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" name="username" id="username" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"></label>
                            <input type="password" name="pass" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Konfirmasi password"/>
                        </div>
                        <div class="form-group">
                            <a href="<?= BASEURL; ?>" class="signup-image-link" style="font-size:13px;margin-left:-150px">I am already member</a>
                        </div>
                        <div class="form-group form-button">
                            <button type="submit" name="signup" id="signup" class="form-submit" style="background-color:black;font-family:Poppins;">
                            <a href="<?= BASEURL; ?>" style="color:white;text-decoration:none">Register</a>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                </div>
            </div>
        </div>
    </section>
<div>
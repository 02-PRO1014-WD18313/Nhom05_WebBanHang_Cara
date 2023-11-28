    
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Create Account
                    </h2>
                    <div class="auth-external-container">
                        <div class="auth-external-list">
                            <ul>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <p class="auth-sgt">or use your email for registration:</p>
                    </div>

                    
                    <form class="login-form" method="post">
                        <input type="text" class="auth-form-input" placeholder="Name" name="name_user">
                        <input type="email" class="auth-form-input" placeholder="Email" name="email_user">
                        <div class="input-icon">
                            <input type="password" class="auth-form-input" placeholder="Password" name="pas_user">
                            <i class="fa fa-eye show-password"></i>
                        </div>
                        
                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i> 
                            <span> I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.</span>
                        </label>
                        <p><?php echo $check_mail_duplicate; ?></p>
                        <div class="footer-action">
                            <input type="submit" name="btn_sign_up" value="Sign Up" class="auth-submit">
                            <a href="index.php?href=login" class="auth-btn-direct">Sign In</a>
                        </div>
                    </form>


                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image">
                    <img src="img/products/f1.jpg" alt="login">
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
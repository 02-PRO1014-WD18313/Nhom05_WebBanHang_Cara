
<div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Sign In
                    </h2>


                    <form class="login-form" method="post">
                        <input type="email" class="auth-form-input" placeholder="Email" name="email" >

                        <div class="input-icon">
                            <input type="password" class="auth-form-input" placeholder="Password" name="pass" >
                            <i class="fa fa-eye show-password"></i>
                        </div>

                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i> 
                            <span> Remember password.</span>
                        </label>
                        <p style="color:red;" ><?php echo $block_eronl ?></p>
                        <div class="footer-action">
                            <input type="submit" name="btn_login" value="Sign In" class="auth-submit">
                            <a href="index.php?href=sign_up" class="auth-btn-direct">Sign Up</a>
                        </div>
                    </form>


                    <div class="auth-forgot-password">
                        <a href="#">Forfot Password</a>
                    </div>
                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image">
                   <img src="/img/products/f5.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</section>
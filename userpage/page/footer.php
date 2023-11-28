<footer class="section-p1">
    <div class="col">
        <img class="logo" src="img/logo.png" alt="">
        <h4>Contact</h4>
        <p><strong>Address: </strong> 290 Xuan Dinh, BAc Tu Liem, Ha Noi</p>
        <p><strong>Phone: </strong> +98 396151784/ +98 0362755194</p>
        <p><strong>Hours: </strong> 10:00 - 18:00, Mon-Sat</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-pinterest-p"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Term & Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="img/pay/app.jpg" alt="">
            <img src="img/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="img/pay/pay.png" alt="">
    </div>

    <div class="copyright">
        @2021, Tech2ect - HTML CSS Ecommerce Template
    </div>
</footer>
</div>


<script src="javasctip/script.js"></script>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../javasctip/sweetalert"></script>
<?php
if (isset($_SESSION['check_sign_up'])) {

    ?>
    <script>
        swal({
            title: "Good job!",
            text: "Đăng ký thành công.",
            button: "Leave",
        });
    </script>
    <?php
}
unset($_SESSION['check_sign_up']);
?>
<?php 
if (isset($_SESSION['update_pass'])) {

    ?>
    <script>
        swal({
            title: "Good job!",
            text: "Thay đổi thành công tài khoản <?php echo $_SESSION['update_pass'] ?>",
            button: "Leave",
        });
    </script>
    <?php
}
unset($_SESSION['update_pass']);
?>

</html>
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
<script src="javasctip/start.js" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
    $('.price_form').val(<?php echo getprice_minmax()->PRICE_MIN ?>)
    $('.price_to').val(<?php echo getprice_minmax()->PRICE_MAX  ?>)
    $(function () {
        $("#slider-range").slider({
            range: true,
            min: <?php echo getprice_minmax()->PRICE_MIN; ?>,
            max: <?php echo getprice_minmax()->PRICE_MAX; ?>,
            values: [<?php echo getprice_minmax()->PRICE_MIN ?>, <?php echo getprice_minmax()->PRICE_MAX / 1.5 ?>],
            slide: function (event, ui) {
                $("#amount").val("đ" + addPlus(ui.values[0]) + " - đ" + addPlus(ui.values[1]));
                $('.price_form').val(ui.values[0]);
                $('.price_to').val(ui.values[1] + 10000);
            }
        });
        $("#amount").val("đ" + addPlus($("#slider-range").slider("values", 0)) +
            " - đ" + addPlus($("#slider-range").slider("values", 1)));
    });
    function addPlus(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
        }
        return x1 + x2;
    }
</script>
<?php
if (isset($_SESSION['check_sign_up'])) {

    ?>
    <script>
        swal({
            title: "",,
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
<?php
if (isset($_SESSION['check_comment'])) {

    ?>
    <script>
        swal({
            title: "Good job!",
            text: "<?php echo $_SESSION['check_comment'] ?>",
            button: "Leave",
        });
    </script>
    <?php
}
unset($_SESSION['check_comment']);
?>
<?php
if (isset($_SESSION['check_order'])) {

    ?>
    <script>
        swal({
            title: "",
            text: "<?php echo $_SESSION['check_order'] ?>",
            button: "Leave",
        });
    </script>
    <?php
}
unset($_SESSION['check_order']);
?>
<?php
if (isset($_SESSION['check_emty_order'])) {

    ?>
    <script>
        alert("<?php echo $_SESSION['check_emty_order'] ?>")
    </script>
    <?php
}
unset($_SESSION['check_emty_order']);
?>
<?php
if (isset($_SESSION['more_cart'])) {

    ?>
    <script>
        alert("<?php echo $_SESSION['more_cart'] ?>")
    </script>
    <?php
}
unset($_SESSION['more_cart']);
?>
<script>
    $('.select-filter').change(function () {
        var value = $(this).find(':selected').val();
        if (value != 0) {
            var url_shop = 'index.php?href=shop';
            var url = url_shop + value;
            //  alert(url);
            window.location.replace(url);
        } else {
            alert('Hãy chọn lọc')
        }
    })
</script>

</html>
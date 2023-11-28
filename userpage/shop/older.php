<div class="controller_older">
    <div class="flex_older">
        <div class="thongtin">
            <h3>Thanh Toán</h3>
            <form action="" method="post" class="form_older">
                <input type="text" name="name_user" id="" placeholder="Họ Và tên"
                    value="<?php echo $user_session->NAME_USER ?>">

                <input type="text" placeholder="Số điện thoại" name="phone_number">

                <input type="email" name="Email_user" id="" placeholder="Email của bạn"
                    value="<?php echo $user_session->EMAIL_USER ?>">

                <select  id="province">
                </select>

                <select  id="district">
                    <option value="">Chọn quận</option>
                </select>

                <select  id="ward">
                    <option value="">Chọn phường</option>
                </select>

                <input type="text" hidden name="province" value="" id="input">
                <input type="text" hidden name="district" value="" id="input1">
                <input type="text" hidden name="commune" value="" id="input2">

                <!-- <h2 id="result"></h2>
                <h2 id="result1"></h2>
                <h2 id="result2"></h2> -->
                
                <button name="btn_sbm_order" >Đặt hàng</button>
            </form>
        </div>

        <div class="table_prod_older">
            <div class="title_prod_older">
                <h3>
                    Sản phẩm mua
                </h3>
            </div>
            <table class="block_older">
                <thead>
                    <tr>
                        <td>Product</td>
                        <td></td>
                        <td>Thành tiền</td>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($get_cart as $prod_older): ?>
                        <?php if (isset($_SESSION['user_login'])) {
                            $user_session = $_SESSION['user_login']; ?>
                            <?php if ($prod_older->ID_KH == $user_session->ID_KH) { ?>

                                <tr>
                                    <td style="display:flex;">
                                        <img width="75px" src="../images_prod/<?php echo $prod_older->IMAGE_VARIANT ?>" alt="">
                                        <p style="  font-size: 10px;">
                                            <?php echo $prod_older->NAME_PROD ?>
                                            <span>(
                                                <?php echo $prod_older->NAME_COLOR ?>)
                                            </span>
                                        </p>
                                    </td>
                                    <td></td>
                                    <td>
                                        <?php
                                        $count_price_prod = $prod_older->PRICE_VARIANT * $prod_older->SOLUONG_CART;
                                        echo number_format($count_price_prod, '0', ',', '.') . "đ";
                                        ?>
                                    </td>
                                </tr>

                            <?php } ?>
                        <?php } ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="tamtinh_order">
                <h4>Tạm tính</h4>
                <p><?php echo number_format($pay_price_prod,'0',',','.').'đ' ?></p>
            </div>
            <div class="tinhtien_prod">
                <h4>Tổng cộng</h4>
                <p><?php echo number_format($pay_price_prod,'0',',','.').'đ' ?></p>
            </div>
        </div>
    </div>


</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
    integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="javasctip/choose_domain.js"></script>

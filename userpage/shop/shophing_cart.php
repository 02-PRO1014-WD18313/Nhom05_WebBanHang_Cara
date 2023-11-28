<section id="page-header" class="about-header">
    <h2>#let's_talk</h2>
    <p>LEAVE A MASSAGE, We love to hear from you!</p>
</section>

<?php if ($count != 0) { ?>
    <section id="cart" class="section-p1">


        <table>
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>

                <?php $tong = 0;
                foreach ($get_cart as $cart_user) { ?>
                    <?php if (isset($_SESSION['user_login'])) {
                        $user_session = $_SESSION['user_login']; ?>
                        <?php if ($cart_user->ID_KH == $user_session->ID_KH) {
                            $getcart_user = $cart_user; ?>
                            <form action="" method="post">
                                <tr>
                                    <td><img src="../images_prod/<?php echo $getcart_user->IMAGE_VARIANT ?>" alt=""></td>
                                    <td class="stickky">
                                        <p>
                                            <?php echo $getcart_user->NAME_PROD ?>
                                            <span>(
                                                <?php echo $getcart_user->NAME_COLOR ?>)
                                            </span>
                                        </p>
                                    </td>
                                    <td>
                                        <?php echo number_format($getcart_user->PRICE_VARIANT, '0', ',', '.') . "đ" ?>
                                    </td>
                                    <td><input type="number" name="soluong" class="quantity_cart"
                                            value="<?php echo $getcart_user->SOLUONG_CART ?>" min="1">
                                        <input type="number" hidden name="id_cart" value="<?php echo $getcart_user->ID_CART ?>">
                                    </td>
                                    <td>
                                        <?php
                                        $count_price_prod = $getcart_user->PRICE_VARIANT * $getcart_user->SOLUONG_CART;
                                        echo number_format($count_price_prod, '0', ',', '.') . "đ";
                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex_hanhdong">
                                            <button class="click_a_update_cart" name="btn_update_cart">
                                                <div class="updata_cart ">

                                                    <i class='bx bxs-edit'></i>

                                                </div>
                                            </button>
                                            <a href="index.php?href=cart&remove_prodcart=<?php echo $getcart_user->ID_CART ?>"
                                                class="remove_prod_cart">
                                                <i class='bx bx-x'></i>
                                            </a>
                                        </div>

                                    </td>
                            </form>
                            </tr>

                        <?php } ?>
                    <?php } ?>
                <?php } ?>

            </tbody>
        </table>



    </section>

    <section id="cart-add" class="section-p1">

        <?php if (isset($_SESSION['user_login'])) { ?>
            <div id="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>
                            <?php echo number_format($all_prod_price, '0', '.', '.') . "đ" ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>
                                <?php echo number_format($all_prod_price, '0', '.', '.') . "đ" ?>
                            </strong></td>
                    </tr>
                </table>
                <a href="index.php?href=order">
                    <button class="normal">Proceed to checkout</button>
                </a>

            </div>
        <?php } else { ?>
            <p>Bạn phải đăng nhập để mua hàng</p>
        <?php } ?>

    <?php } else { ?>
        <div class="div_check_empty_cart">
            <img width="400px" src="img/products/preview-removebg-preview.png" alt="">
            <h3 class="check_empty_cart">Không có sản phẩm nào trong giỏ hàng</h5>
        </div>

    <?php } ?>

    <style>
        .click_a_update_cart {
            text-decoration: none;
            width: 20px;
            height: 27px;
            margin-right: 10px;
            margin-left: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f7f8f9;
        }

        .div_check_empty_cart {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
<div class="contructer_order_details">
    <div class="out_order_details">
        <div class="order_managenment_code">
            <p>Quản lý đơn hàng:<span>Chi tiết đơn hàng
                    <?php echo $getid_order->CODE_ORDER ?>
                </span></p>
        </div>
        <a href="index.php?act=older">
            <i class='bx bx-log-in'></i>
            <p>Thoát</p>
        </a>
    </div>

    <div class="order_details_information">
        <div class="information_order">
            <div class="title_information_order">
                <i class='bx bxs-polygon'></i>
                <p>Thông tin đơn hàng</p>
            </div>
            <div class="body_information_order">
                <div class="body_information_order_1">
                    <p>Mã</p>
                    <span>
                        <?php echo $getid_order->CODE_ORDER ?>
                    </span>
                </div>
                <div class="body_information_order_2">
                    <p>Ngày tạo</p>
                    <span>
                        <?php echo $getid_order->DATA_ORDER ?>
                    </span>
                </div>
                <div class="body_information_order_3">
                    <p>Trạng thái đơn hàng</p>
                    <span>
                        <?php
                        if ($getid_order->STATUS_ORDER == 1) {
                            echo "Đơn hàng mới";
                        } elseif ($getid_order->STATUS_ORDER == 2) {
                            echo "Đã xác nhận đơn hàng";
                        } elseif ($getid_order->STATUS_ORDER == 3) {
                            echo "Đơn hàng đang giao";
                        } elseif ($getid_order->STATUS_ORDER == 4) {
                            echo "Giao hàng thành công";
                        } else {
                            echo "Đơn hàng bị hủy";
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="pay_product">
            <div class="title_pay_prod">
                <i class="fa-solid fa-credit-card"></i>
                <p>Thanh toán</p>
            </div>
            <div class="body_pay_prod">
                <div class="body_pay_prod1">
                    <p>Thanh toán khi nhận hàng</p>
                    <span></span>
                </div>
                <div class="body_pay_prod2">
                    <p>Trạng thái thanh toán</p>
                    <span>
                        <?php
                        if ($getid_order->STATUS_ORDER == 1 || $getid_order->STATUS_ORDER == 2 || $getid_order->STATUS_ORDER == 3) {
                            echo "Chưa thanh toán!";
                        } elseif ($getid_order->STATUS_ORDER == 4) {
                            echo "Đơn hàng đã thanh toán";
                        } else {
                            echo "Chưa thanh toán!";
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="delivery">
            <div class="title_delivery">
                <i class="fa-solid fa-truck"></i>
                <p>Giao hàng</p>
            </div>
            <div class="body_delivery">
                <div class="body_delivery1">
                    <p>Hình thức lấy hàng</p>
                    <span>Giao hàng tận nơi</span>
                </div>
                <div class="body_delivery2">
                    <p>Trạng thái giao hàng</p>
                    <span>
                        <?php
                        if ($getid_order->STATUS_ORDER == 1 || $getid_order->STATUS_ORDER == 2 || $getid_order->STATUS_ORDER == 3) {
                            echo "Chưa giao hàng";
                        } elseif ($getid_order->STATUS_ORDER == 4) {
                            echo "Giao hàng thành công";
                        } else {
                            echo "Hàng bị hủy";
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="main_order_details">
        <div class="main_manager_order">
            <form action="" method="post">
                <div class="title_main_order_details">
                    <i class='bx bxs-shopping-bags'></i>
                    <p>Chi tiết đơn hàng</p>
                </div>
                <div class="table_main_manager_order">
                    <table class="table_mmo">
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count_price = 0;
                            foreach ($getid_order_details as $order_details):
                                $count_price += $order_details->PRICE * $order_details->QUANITY;
                                ?>
                                <tr>
                                    <td>
                                        <img src="../images_prod/<?php echo $order_details->IMAGE_VARIANT ?>" alt="">
                                    </td>
                                    <td>
                                        <p>
                                            <?php echo $order_details->NAME_PROD ?>
                                        </p>
                                        <span>(
                                            <?php echo $order_details->NAME_COLOR ?>)
                                        </span>
                                    </td>
                                    <td>
                                        <?php echo $order_details->QUANITY ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($order_details->PRICE, '0', ',', '.') . 'đ' ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo number_format($order_details->PRICE * $order_details->QUANITY, '0', ',', '.') . 'đ'
                                            ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="Payment_confirmation">
                    <div class="block_drum">

                    </div>
                    <div class="money_to_pay">
                        <div class="confirmmation_money_pay">
                            <div class="total_money_pay">
                                <p>Tổng tiền hàng</p>
                                <span>
                                    <?php echo number_format($count_price, '0', ',', '.') . 'đ' ?>
                                </span>
                            </div>
                            <div class="transport_fee">
                                <p>Phí vận chuyển</p>
                                <span>0đ</span>
                            </div>
                            <div class="discount">
                                <p>Giảm giá</p>
                                <span>0đ</span>
                            </div>
                            <div class="Total_order_value">
                                <p>Tổng giá trị đơn hàng</p>
                                <span>
                                    <?php echo number_format($count_price, '0', ',', '.') . 'đ' ?>
                                </span>
                            </div>
                            <div class="btn_confirm">
                                <div>
                                    <select name="confirm" id="">
                                        <?php foreach ($getall_confirm_order as $confirm): ?>

                                            <option value="<?php echo $confirm->STATUS_ORDER ?>"
                                            <?php if($getid_order->STATUS_ORDER == $confirm->STATUS_ORDER): ?>
                                                   selected
                                            <?php endif ?>
                                            >
                                                <?php echo $confirm->NAME_STATUS_ORDER ?>
                                            </option>

                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <button type="submit" name="btn_confirm_older">
                                    Cập nhật
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <div class="Related_information">
            <div class="delivery_address">
                <div class="title_delivery_address">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>Địa chỉ lấy hàng</p>
                </div>
                <div class="body_delivery_address">
                    <p>
                        <?php echo $getid_order->VIETNAM_COMMUNE . ',' . $getid_order->VIETNAM_DISTRICT . ',' . $getid_order->VIETNAM_PROVINCE ?>
                    </p>
                </div>
            </div>
            <div class="informmation_user">
                <div class="title_informmation_user">
                    <i class="fa-regular fa-user"></i>
                    <p>Thông tin người mua</p>
                </div>
                <div class="body_informmation_user">
                    <img src="image/3.jpg" alt="">
                    <div class="user">
                        <p>
                            <?php echo $getid_order->NAME_USER_ORDER ?>
                        </p>
                        <p>SĐT:
                            <?php echo $getid_order->PHONE_NUMBER ?>
                        </p>
                        <p>
                            <?php echo $getid_order->EMAIL_ADDRESS ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

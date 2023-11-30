<div class="table_prod_pending">
    <div class="title_infor_order_user">
        <p>Mã đợn hàng:
            <?php echo $getid_order->CODE_ORDER ?>
        </p>
    </div>
    <table class="table_pending">
        <thead>
            <tr>
                <th></th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($getid_order_details as $getid_order_details): ?>
            <tr>
                <td>
                    <img width="85px" src="../images_prod/<?php echo $getid_order_details->IMAGE_VARIANT ?>" alt="">
                </td>
                <td>
                    <p><?php echo $getid_order_details->NAME_PROD?></p>
                    <span>(<?php echo $getid_order_details->NAME_COLOR ?>)</span>
                </td>
                <td><?php echo $getid_order_details->QUANITY ?></td>
                <td>
                    <?php echo number_format($getid_order_details->PRICE,'0',',','.').'đ' ?>
                </td>
                <td>
                    <?php echo number_format($getid_order_details->QUANITY * $getid_order_details->PRICE , '0',',','.').'đ' ?>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
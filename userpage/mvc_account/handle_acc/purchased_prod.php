<div class="table_prod_pending">
    <p>Đơn hàng bạn đã mua</p>
    <table class="table_pending">
        <thead>
            <tr>
                <th></th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($select_prod_success as $get) {
                if ($get->ID_KH == $account->ID_KH) {
                    if ($get->STATUS_ORDER == 4) { ?>
                        <tr>
                            <td>
                                <a href="index.php?href=details&id_prod=<?php echo $get->ID_PRODUCT ?>&shop">
                                    <img width="85px" src="../images_prod/<?php echo $get->IMAGE_VARIANT ?>" alt="">
                                </a>

                            </td>
                            <td>
                                <p>
                                    <?php echo $get->NAME_PROD ?>
                                </p>
                                (<span>
                                    <?php echo $get->NAME_COLOR ?>
                                </span>)
                            </td>
                            <td>
                                <?php echo $get->QUANITY ?>
                            </td>
                            <td>
                                <?php echo number_format($get->PRICE, '0', ',', '.') . 'đ' ?>
                            </td>
                            <td>
                                <?php echo number_format($get->PRICE * $get->QUANITY, '0', ',', '.') . 'đ' ?>
                            </td>
                            <td>
                                <a href="index.php?href=account&acc=comment_prod&id_prod=<?php echo $get->ID_PRODUCT ?>&id_rele=<?php echo $get->ID_RELATED_PRODUCT ?>">Đánh giá</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
            }
            ?>
        </tbody>
    </table>

</div>
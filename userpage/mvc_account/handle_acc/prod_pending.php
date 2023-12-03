<div class="table_prod_pending">
    <table class="table_pending">
        <thead>
            <tr>
                <th>Mã đơn</th>
                <th>Sản phẩm</th>
                <th>Tổng giá</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getall_older_pending as $get): ?>
                <?php if ($get->ID_KH == $account->ID_KH) { ?>
                    <?php if (
                        $get->STATUS_ORDER == 1 || $get->STATUS_ORDER == 2 ||
                        ($get->STATUS_ORDER == 3 || $get->STATUS_ORDER == 5)
                    ) { ?>
                        <tr>
                            <td>
                                <a href="index.php?href=account&acc=prod_pending&info_order_user=<?php echo $get->ID_ORDER ?>">
                                    <?php echo $get->CODE_ORDER ?>
                                </a>

                            </td>
                            <td>
                                <?php foreach ($order_details_pending as $det_pen) { ?>
                                    <?php if ($get->ID_ORDER == $det_pen->ID_ORDER) { ?>

                                        <p>
                                            <?php echo $det_pen->NAME_PROD . "(" . $det_pen->NAME_COLOR . ")" ?>
                                        </p>

                                    <?php } ?>
                                <?php } ?>

                            </td>
                            <td>
                                <?php echo number_format($get->TOTAL, '0', ',', '.') . 'đ' ?>
                            </td>
                            <td>
                                <?php
                                if ($get->STATUS_ORDER == 1) {
                                    echo "Chờ xác nhận";
                                } elseif ($get->STATUS_ORDER == 2) {
                                    echo "Đã xác nhận";
                                } elseif ($get->STATUS_ORDER == 3) {
                                    echo "Đang trên đường giao";
                                } elseif ($get->STATUS_ORDER == 5) {
                                    echo "Đơn đã bị hủy";
                                }
                                ?>
                            </td>
                            <td>
                                <?php if ($get->STATUS_ORDER == 1) { ?>
                                    <a href="index.php?href=account&acc=prod_pending&cancel_order=<?php echo $get->ID_ORDER ?>"
                                        style="color: black; text-decoration: none;">
                                        Hủy đơn
                                    </a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
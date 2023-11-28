<style>
    .delete_choose_oder a {
        padding: 10px 15px;
        background-color: rgb(255, 124, 124);
        color: #ffffff;
    }
</style>
<!-- test -->
<form action="" class="form" id="form_older">
    <div class="delete_choose_oder" onclick="delete__older()">
        <a>
            <i class='bx bx-trash'></i>
            Xóa mục chọn
        </a>
    </div>

    <div class="bag_big_page_manager">
        <div class="table_page_manager_statistical">

            <table class="table_manager_statistical">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="select_older" onclick="selectall_older()"></th>
                        <th>Mã</th>
                        <th>Khách hàng</th>
                        <th>Trạng thái</th>
                        <th>Thanh toán</th>
                        <th>Ngày tạo</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($getall_older as $older): ?>
                        <tr id="box2<?php echo $older->ID_ORDER ?>">
                            <td><input type="checkbox" name="checkbox[]" id="<?php echo $older->ID_ORDER ?>"
                                    value="<?php echo $older->ID_ORDER ?>"></td>
                            <td><a class="code_order" href="index.php?act=older&detal_older=<?php echo $older->ID_ORDER ?>">
                                    <?php echo $older->CODE_ORDER ?>
                                </a></td>
                            <td>
                                <?php echo $older->NAME_USER_ORDER ?>
                            </td>
                            <td>
                                <?php
                                // echo $older->STATUS_ORDER;
                                if ($older->STATUS_ORDER == 1) {
                                    echo "Đơn hàng mới";
                                } elseif ($older->STATUS_ORDER == 2) {
                                    echo "Đã xác nhận đơn hàng";
                                } elseif ($older->STATUS_ORDER == 3) {
                                    echo "Đơn hàng đang giao";
                                } elseif ($older->STATUS_ORDER == 4) {
                                    echo "Giao hàng thành công";
                                } else {
                                    echo "Đơn hàng bị hủy";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($older->STATUS_ORDER == 1 || $older->STATUS_ORDER == 2 || $older->STATUS_ORDER == 3) {
                                    echo "Chưa thanh toán!";
                                } elseif ($older->STATUS_ORDER == 4) {
                                    echo "Đơn hàng đã thanh toán";
                                } else {
                                    echo "Chưa thanh toán!";
                                }
                                ?>
                            </td>
                            <td>
                                <?php echo $older->DATA_ORDER ?>
                            </td>
                            <td>
                                <?php echo number_format($older->TOTAL, '0', ',', '.') . 'đ' ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>

            </table>
        </div>
    </div>
</form>
<script>

    function selectall_older() {
        if ($('#select_older').prop("checked")) {
            $('input[type=checkbox]').each(function () {
                console.log(this.id)
                jQuery('#' + this.id).prop('checked', true);
            })
        } else {
            $('input[type=checkbox]').each(function () {
                jQuery('#' + this.id).prop('checked', false);
            })
        }
    }

    function delete__older() {

        $.ajax({
            url: 'index.php?act=older',
            type: 'post',
            data: $('#form_older').serialize(),
            success: function () {
                $('input[type=checkbox]').each(function () {
                    if (jQuery('#' + this.id).prop('checked')) {
                        swal({
                            title: "Xóa thành công",
                            button: "ok",
                        });
                        $('#box2' + this.id).remove();
                    }
                });
            }
        })
    }
</script>
<form action="" class="form" id="form" method="post">
    <div class="bag_big_page_manager">
        <div class="table_page_manager_statistical">

            <table class="table_manager_statistical">
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên Loại hàng</th>
                        <th>
                            <a href="index.php?act=more_type" class="a_more_prod_type">
                               Tạo mới
                            </a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($getall_type as $get): ?>
                        <tr id="box<?php echo $get->ID_PROD_TYPE ?>">
                            <td><input type="checkbox" name="checbox[]" id="<?php echo $get->ID_PROD_TYPE ?>"
                                    value="<?php echo $get->ID_PROD_TYPE ?>"></td>
                            <td>
                                <?php echo $get->ID_PROD_TYPE ?>
                            </td>
                            <td>
                                <?php echo $get->NAME_PROD_TYPE ?>
                            </td>
                            <td>
                                <!-- <div class="hanhdong">
                                    <a href="index.php?act=product_protfolio&dele_type=<?php echo $get->ID_PROD_TYPE ?>"
                                        class="remove"><i class='bx bx-trash'></i></a>
                                </div> -->
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
        <!-- <div class="chose">
            <div class="choose_all" onclick="check_all()" id="choose_all">
                <p>Chọn tất cả</p>
            </div>
            <div class="unchecker" onclick="deselect_all()" id="unchecker">
                <p>bỏ chọn</p>
            </div>
            <div class="remove_choose_type" onclick="delete_id()">
                <p>Xóa mục chọn</p>
            </div>
        </div> -->
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="js_admin/jquery.js"></script>
<script>
    function delete_id() {
        $.ajax({
            url: '/du_an_1/admin/index.php?act=product_protfolio',
            type: 'post',
            data: $('#form').serialize(),
            success: function () {
                $('input[type=checkbox]').each(function () {
                    if (jQuery('#' + this.id).prop('checked')) {
                        $('#box' + this.id).remove();
                    }
                });
            }
        })
    }
</script>
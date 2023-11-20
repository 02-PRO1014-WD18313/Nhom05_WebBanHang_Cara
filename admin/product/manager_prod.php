<div class="seach_more_color">
    <div class="gruop">
        <div class="open_modal_popup_table_color">
            <button class="but_more_table_color">Thêm màu</button>
            <div class="big_mode_color hidden">
                <div class="modal_page_smail_more_color">
                    <div class="moder_header_color">
                        <p>Thêm bảng màu</p>
                        <i class='bx bx-x'></i>
                    </div>
                    <form action="" method="post">
                        <div class="moder_body_color">
                            <div class="flex_title_color">
                                <label for="">Nhập màu sắc</label>
                                <input type="color" name="code_color" id="input_color" onchange="getcolor()">
                                <p class="block_color"></p>
                            </div>

                            <div class="choose_color">

                                <input class="input_more_color" type="text" name="name_color"
                                    placeholder="mời nhập màu sắc">
                            </div>
                            <div class="available_color">
                                <p style="font-size: 18px;padding: 10px 0px;">Màu hiện có:</p>
                                <ul class="ul_aval_color">
                                    <?php foreach ($getall_color as $get): ?>
                                        <li>
                                            <?php echo $get->NAME_COLOR ?>
                                            <div class="color_display"
                                                style=" background-color:<?php echo $get->CODE_COLOR ?>;"></div>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                        <div class="moder_footer_color">
                            <button name="btn_more_color">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contructer_more_size">
            <button>Thêm size</button>
            <div class="more_size_prod hidden_more_size">

                <div class="moder_size">
                    <div class="header_size">
                        <p>Thêm size</p>
                        <i class='bx bx-x'></i>
                    </div>
                    <form action="" method="post">
                        <div class="body_size">
                            <input type="text" name="name_size" placeholder="Mời điền kích cỡ">
                        </div>
                        <div class="table_size">
                            <p>Bảng size:</p>
                            <ul class="ul_table_size">
                                <?php foreach ($getall_size as $get): ?>
                                    <li>
                                        <?php echo $get->NAME_SIZE ?>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div class="footer_size">
                            <button type="submit" name="btn_size">Thêm size</button>
                            <button type="reset">Nhập lại</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="seach_product">
        <form action="" method="post">
            <input type="text" placeholder="Seach" name="keyword">
            <button class="btn_sbm_seach_product" name="seach_prod"><i class='bx bx-search'></i></button>
        </form>
    </div>
</div>

<form action="" class="form" id="form_prod" method="post">
    <div class="bag_big_page_manager">
        <div class="table_page_manager_statistical">

            <table class="table_manager_statistical">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="choose_all" onclick="selectall()"> </th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Danh mục</th>
                        <th>Ngày nhập</th>
                        <th>Phân hàng</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($getall_prod as $get): ?>
                        <tr id="box<?php echo $get->ID_PRODUCT ?>">
                            <td><input type="checkbox" name="checkbox[]" id="<?php echo $get->ID_PRODUCT ?>"
                                    value="<?php echo $get->ID_PRODUCT ?>"></td>
                            <td>
                                <?php echo $get->CODE_PROD ?>
                            </td>
                            <td>
                                <?php echo $get->NAME_PROD ?>
                            </td>
                            <td>
                                <img width="90px" src="../images_prod/<?php echo $get->IMAGE ?>" alt="">
                            </td>
                            <td>
                                <?php echo number_format($get->NEW_PRICE, '0', ',', '.') . "đ" ?>
                            </td>
                            <td>
                                <?php echo $get->NAME_PROD_TYPE ?>
                            </td>
                            <td>
                                <?php echo $get->DATE_ADDED ?>
                            </td>
                            <td>
                                <a class="classify"
                                    href="index.php?act=variant_prod&bienthe=<?php echo $get->ID_PRODUCT ?>">
                                    Phân hàng
                                </a>
                            </td>
                            <td>
                                <div class="hanhdong">
                                    <a href="index.php?act=manager_prod&upd_prod=<?php echo $get->ID_PRODUCT ?>"
                                        class="edit"><i class='bx bx-edit'></i></a>
                                    <a href="index.php?act=manager_prod&del_prod=<?php echo $get->ID_PRODUCT ?>"
                                        class="remove"><i class='bx bx-trash'></i></a>
                                </div>

                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
        <div class="chose" id="choose_prod">
            <div class="flex_chose">
                <div class="remove_choose_prod" onclick="delete_id()">
                    <p>Xóa mục chọn</p>
                </div>
                <a href="index.php?act=more_prod">
                    <div class="more">
                        <p>Thêm sản phẩm</p>
                    </div>
                </a>
            </div>

            <div class="pagination">
                <ul class="ul_pagination">

                    <?php if (isset($_GET['page'])) { ?>
                        <?php if ($_GET['page'] > 2): ?>
                            <li><a href="index.php?act=manager_prod&page=<?php echo $_GET['page'] - 1 ?>">&laquo;</a></li>
                        <?php endif ?>
                    <?php } ?>

                    <?php for ($i = 1; $i <= $navigation; $i++): ?>

                        <?php if (isset($_GET['page'])) { ?>
                            <?php if ($i > $_GET['page'] - 2 && $i < ($_GET['page']) + 2): ?>
                                <li>
                                    <a href="index.php?act=manager_prod&page=<?php echo $i ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                            <?php endif ?>
                        <?php } else { ?>
                            <?php if ($i > $i - 1 && $i < 3): ?>
                                <li>
                                    <a href="index.php?act=manager_prod&page=<?php echo $i ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                            <?php endif ?>
                        <?php } ?>

                    <?php endfor ?>

                    <?php if (isset($_GET['page'])) { ?>
                        <?php if ($_GET['page'] <= $navigation - 1) { ?>
                            <li><a href="index.php?act=manager_prod&page=<?php echo $_GET['page'] + 1 ?>">&raquo;</a></li>
                        <?php } ?>
                    <?php } else { ?>

                        <?php $page = $_GET['page'] = 1 ?>

                        <?php if ($page <= $navigation - 1) { ?>
                            <li><a href="index.php?act=manager_prod&page=<?php echo $page + 1 ?>">&raquo;</a></li>
                        <?php } ?>
                    <?php } ?>

                </ul>
            </div>

        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="js_admin/jsmorecolor.js"></script>
<script>

    function selectall() {
        if ($('#choose_all').prop("checked")) {
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

    function delete_id() {

        $.ajax({
            url: '/du_an_1/admin/index.php?act=manager_prod',
            type: 'post',
            data: $('#form_prod').serialize(),
            success: function () {
                $('input[type=checkbox]').each(function () {
                    if (jQuery('#' + this.id).prop('checked')) {
                        swal({
                            title: "Xóa thành công",
                            button: "ok",
                        });
                        $('#box' + this.id).remove();
                    }
                });
            }
        })
    }
</script>
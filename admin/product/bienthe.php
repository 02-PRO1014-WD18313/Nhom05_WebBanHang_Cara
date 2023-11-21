<div class="contructer_more_color_prod">
    <div class="more_color_prod hidden_color_prod">
        <div class="moder_more_color_prod ">

            <div class="header_color_prod">
                <h2>Thêm biến thể sản phẩm</h2>
                <i class='bx bx-x'></i>
            </div>



            <form class="body_color_prod" method="post" enctype="multipart/form-data">
                <div class="choose_size_and_color">
                    <!-- <select name="" id="">
                        <option value="" selected>Chọn size</option>
                        <option value="">L</option>
                        <option value="">M</option>
                        <option value="">X</option>
                    </select> -->
                    <select name="color_variant" id="">
                        <option value="" selected>Mời chọn màu</option>
                        <?php foreach ($getall_color as $get): ?>

                            <option value="<?php echo $get->ID_COLOR ?>">
                                <?php echo $get->NAME_COLOR ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="more_price_variant">
                    <div class="price_variant_flex_new">
                        <label for="">Giá</label><br>
                        <input type="number" name="price_variant" id="">
                    </div>
                </div>

                <div class="container_show_image">
                    <div class="div_contain_input_choose_img">
                        Chọn File
                        <input class="input_img" type="file" name="image_variant" onchange="check(this)">
                    </div>
                    <div class="contructer">
                        <div class="shows_image">
                            <div class="header_show_image">
                                <p class="p_img"></p>
                            </div>
                            <span></span>


                        </div>
                    </div>

                    <div class="div_btn_color_prod">
                        <button id="load_prod_variant" type="submit" class="button_color_prod" name="btn_variant"
                            onclick="check_variant()">Thêm</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
</div>
<style>
    .color_variant {
        width: 20px;
        height: 20px;
        border-radius: 50%;
    }
</style>
<form action="" class="form">
    <div class="bag_big_page_manager">
        <div class="code_prod">
            <p>Mã Sản phẩm:
                <?php echo $getid_product->CODE_PROD ?>
            </p>
            <span>Tên sản phẩm:
                <?php echo $getid_product->NAME_PROD ?>
            </span>
        </div>

        <div class="table_page_manager_statistical">

            <table class="table_manager_statistical">
                <thead>
                    <tr>
                        
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Màu sắc</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($getid_variant as $get): ?>
                        <tr>
                            <td>
                                <img width="100px" src="../images_prod/<?php echo $get->IMAGE_VARIANT ?>" alt="">
                            </td>
                            <td>
                                <?php echo number_format($get->PRICE_VARIANT,'0',",",".")."đ" ?>
                            </td>
                            <td>
                                <?php echo $get->NAME_COLOR ?>
                            </td>
                            <td>
                                <div class="color_variant" style="background-color:<?php echo $get->CODE_COLOR ?>;"></div>
                            </td>
                            <td>
                                <div class="hanhdong">
                                    <a href="index.php?act=variant_prod&bienthe=<?php echo $get->ID_PRODUCT ?>&edit_variant=<?php echo $get->ID_RELATED_PRODUCT ?>" class="edit"><i class='bx bx-edit'></i></a>
                                    <a href="index.php?act=variant_prod&bienthe=<?php echo $get->ID_PRODUCT ?>&del_variant=<?php echo $get->ID_RELATED_PRODUCT ?>"
                                        class="remove"><i class='bx bx-trash'></i></a>
                                </div>

                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>

            </table>
        </div>
        <div class="chose">
            <div class="flex_chose">
                <div id="more_prod_img">
                    <p class="more_prod_img">Thêm mới</p>

                </div>
                <a href="index.php?act=manager_prod">
                    <div class="more">
                        <p>Danh mục</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</form>
<script src="js_admin/admin.js"></script>
<script src="js_admin/scrip_more_prod.js"></script>

</html>
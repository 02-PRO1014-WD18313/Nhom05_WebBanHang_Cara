<form action="" class="form_update_prod" method="post" enctype="multipart/form-data">

    <div class="controller_form_updata_prod">
        <div class="tittle_updata_prod">
            <p>Sủa sản phẩm</p>
            <span>Mã sản phẩm: <?php echo $getid_prod->CODE_PROD ?></span>
        </div>
        <div class="updata_product">
            <label for="">Tên sản phẩm</label>
            <input class="updata_input_product" type="text" name="updname" value="<?php echo $getid_prod->NAME_PROD?>">
            <label for="">Ảnh</label>
            <input type="file" name="upd_img" id="fileupdate">
            <img src="../images_prod/<?php echo $getid_prod->IMAGE ?>" alt="" id="updata_image">
            <div class="price_edit">
                <div class="new_price">
                    <label for="">Giá mới</label>
                    <input class="updata_input_product" name="upd_new" type="number" value="<?php echo $getid_prod->NEW_PRICE ?>">
                </div>
                <div class="old_price">
                    <label for="">Giá cũ</label>
                    <input class="updata_input_product" name="upd_old" type="number" value="<?php echo $getid_prod->OLD_PRICE ?>">
                </div>
            </div>
            <label for="">Danh mục</label>
            <select name="upd_menu" id="">
                <?php foreach ($getall_type as $gettype): ?>
                    <option value="<?php echo $gettype->ID_PROD_TYPE ?>" <?php
                      if ($gettype->ID_PROD_TYPE == $getid_prod->ID_PROD_TYPE): ?> selected <?php endif ?>>
                        <?php echo $gettype->NAME_PROD_TYPE ?>
                    </option>
                <?php endforeach ?>
            </select>
            <div class="btn_update_prod">
                <button class="reset_updata" type="reset">Hủy</button>
                <button class="updata_prod" name="updata_prod">Lưu</button>
            </div>
        </div>
</form>
<script>
    let img = document.getElementById('updata_image')
    let input = document.getElementById('fileupdate')
    input.onchange = (e) => {
        if (input.files[0]) {
            img.src = URL.createObjectURL(input.files[0])
        }
    }
</script>
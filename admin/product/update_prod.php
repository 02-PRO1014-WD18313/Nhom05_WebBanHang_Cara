<form action="" class="form_update_prod" method="post" enctype="multipart/form-data">

    <div class="controller_form_updata_prod">
        <div class="tittle_updata_prod">
            <p>Sủa sản phẩm</p>
            <span>Mã sản phẩm:
                <?php echo $getid_prod->CODE_PROD ?>
            </span>
        </div>
        <div class="updata_product">
            <label for="">Tên sản phẩm</label>
            <input class="updata_input_product" type="text" name="updname" value="<?php echo $getid_prod->NAME_PROD ?>">
            <label for="">Ảnh</label>
            <input type="file" name="upd_img" id="fileupdate">
            <img src="../images_prod/<?php echo $getid_prod->IMAGE ?>" alt="" id="updata_image">
            <div class="price_edit">
                <div class="new_price">
                    <label for="">Giá mới</label>
                    <input class="updata_input_product" name="upd_new" type="number"
                        value="<?php echo $getid_prod->NEW_PRICE ?>">
                </div>
                <div class="old_price">
                    <label for="">Giá cũ</label>
                    <input class="updata_input_product" name="upd_old" type="number"
                        value="<?php echo $getid_prod->OLD_PRICE ?>">
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
            <label for="">Mô tả</label>
            <textarea name="describe_updata_prod" id="textarea_updata_prod" cols="30" rows="10">
                <?php echo $getid_prod->DESCRIBE ?>
            </textarea>
            <div class="btn_update_prod" style="  display: flex;">

                <a href="index.php?act=manager_prod" class="a_huy_update">
                    <div class="reset_updata" id="reset_update">Hủy</div>
                </a>

                <button class="updata_prod" name="updata_prod">Lưu</button>
            </div>
        </div>
</form>
<style>
    #reset_update {
        padding: 13px;
        margin-right: 5px;
    }

    .a_huy_update {
        text-decoration: none;
    }

    #textarea_updata_prod {
        border: 1px solid rgb(84, 84, 84);
        margin-top: 5px;
    }
</style>
<script>
    let img = document.getElementById('updata_image')
    let input = document.getElementById('fileupdate')
    input.onchange = (e) => {
        if (input.files[0]) {
            img.src = URL.createObjectURL(input.files[0])
        }
    }
</script>
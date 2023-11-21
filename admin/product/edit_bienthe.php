        <form action="" class="form_update_prod" method="post" enctype="multipart/form-data">
            <div class="controller_form_updata_prod variant">
                <div class="tittle_updata_prod title_variant_prod">
                    <p>Sủa biến thể sản phẩm</p>
                    <a href="index.php?act=variant_prod&bienthe=<?php echo $_GET['bienthe'] ?>">
                        Thoát
                    </a>
                </div>
                <div class="updata_product variant">
                    <label for="">Ảnh</label>
                    <input type="file" name="img_variant"  id="file_update">
                    <img style="border: 1px solid rgb(171, 171, 171);" width="100px" height="100px" src="../images_prod/<?php echo $getid_variant_prod->IMAGE_VARIANT ?>" alt="" id="updata_image">
                    <div class="price_edit">
                        <div class="new_price price_variant">
                            <label for="">Giá</label>
                            <input  type="text" class="updata_input_product" name="price_variant" value="<?php echo $getid_variant_prod->PRICE_VARIANT?>">
                        </div>
                    </div>
                    <label for="">Danh mục màu</label>
                    <select name="menu_color_variant" id="">
                        <?php foreach($getall_color as $get): ?>
                        <option value="<?php echo $get->ID_COLOR ?>"
                        <?php if($getid_variant_prod->ID_COLOR == $get->ID_COLOR): ?>
                            selected
                            <?php endif ?>
                        ><?php echo $get->NAME_COLOR ?></option>
                        <?php endforeach ?>
                    </select>
                    <div class="btn_update_prod">
                        <button class="" name="btn_edit_variant">Edit</button>
                    </div>
                </div>
        </form>
<script>
    let img = document.getElementById('updata_image')
    let input = document.getElementById('file_update')
    input.onchange = (e) => {
        if (input.files[0]) {
            img.src = URL.createObjectURL(input.files[0])
        }
    }
</script>

</html>
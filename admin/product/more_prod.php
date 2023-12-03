<form action="" class="form_more_prod" method="post" enctype="multipart/form-data">
            <div class="controller_more_prod">
                <div class="more_product">
                    <div class="title_more_product">
                        <p>Thêm sản phẩm</p>
                        <a href="/du_an_1/admin/index.php?act=manager_prod">
                            <i class='bx bx-log-in' ></i>
                            <p>Thoát</p>
                        </a>
                    </div>
                    <div class="input_more_prod">
                        <div class="div_input">
                            <label for="">Tên sản phẩm</label>
                            <input class="box_more_prod" type="text" name="name_prod">
                        </div>
                        <div class="btn_more_img">
                            <button>
                                <i class='bx bxs-cloud-upload'></i>
                                <p>Upload File</p>
                                <input type="file" name="images" id="fileupload">
                            </button>
                            <img width="100px" src="" alt="" id="imgup">
                        </div>
                        <div class="price_more_product">
                            <div class="more_new_price">
                                <label for="">Giá mới</label>
                                <input class="box_more_prod" type="number" name="new_price">
                            </div>
                            <div class="more_new_price">
                                <label for="">Giá cũ</label>
                                <input class="box_more_prod" type="number" name="old_price">
                            </div>
                            
                        </div>
                        <div class="div_select_more_prod">
                            <label for="">Danh mục</label>
                            <select name="choose_type" id="">
                                <option value="" selected >Danh mục</option>
                                <?php foreach($getall_type as $get): ?>
                                <option value="<?php echo $get->ID_PROD_TYPE ?>"><?php echo $get->NAME_PROD_TYPE ?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="mota">
                            <label for="">Mô tả</label>
                            <textarea name="describe" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="btn_more_product">
                            <button name="btn_more_prod">Tạo mới</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script>
    let img = document.getElementById('imgup')
    let input = document.getElementById('fileupload')
    input.onchange = (e) => {
        if (input.files[0]) {
            img.src = URL.createObjectURL(input.files[0])
        }
    }

</script>
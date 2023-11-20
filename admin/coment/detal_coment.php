<div class="title_gruop_coment_idprod">

    <div class="intriduct_prod_comment">
        <p>Sản phẩm: <span>
                <?php echo $getid_prod->NAME_PROD ?>
            </span>
        </p>
    </div>

    <div class="act_comment">
        
        <div class="choose_dele_comment" onclick="delete_id_coment()">                
            <p>Xóa mục chọn</p>      
        </div>
        
        <div class="out_manager_comment">
            <a href="index.php?act=comment">Thoát</a>
        </div>
        
    </div>

</div>

<form action="" class="form" method="post" id="form_coment">
    <div class="bag_big_page_manager">
        <div class="table_page_manager_statistical">

            <table class="table_manager_statistical">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectallcomment" onclick="select_all()"></th>
                        <th>Nội dung</th>
                        <th>Ngày bình luận</th>
                        <th>Người bình luận</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($slec_coment_idprod as $get): ?>
                        <tr id="box<?php echo $get->ID_COMMENT ?>">
                            <td><input type="checkbox" name="checkbox[]" id="<?php echo $get->ID_COMMENT ?>"
                                    value="<?php echo $get->ID_COMMENT ?>"></td>
                            <td>
                                <?php echo $get->COMMENTARY_CONTENT ?>
                            </td>
                            <td>
                                <?php echo $get->DATE_COMENT ?>
                            </td>
                            <td>
                                <?php echo $get->NAME_USER ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>

            </table>
        </div>
    </div>
</form>
<script>
        function select_all() {
        if ($('#selectallcomment').prop("checked")) {

            $('input[type=checkbox]').each(function () {
                console.log(this.id)
                jQuery('#' + this.id).prop('checked', true);
            })
        }
        else {
            $('input[type=checkbox]').each(function () {
                jQuery('#' + this.id).prop('checked', false);
            })
        }
    }
    function delete_id_coment() {

        $.ajax({
            url: '/du_an_1/admin/index.php?act=comment&group_coment=<?php echo $_GET['group_coment'] ?>',
            type: 'post',
            data: $('#form_coment').serialize(),
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
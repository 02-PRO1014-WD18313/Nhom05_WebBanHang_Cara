<div class="div_delete_seachuser">

    <form action="" method="post">
        <div class="seach_user">
            <input type="text" placeholder="Seach" name="keyword_name_user">
            <button class="btn_sbm_seach_user" name="seach_user"><i class='bx bx-search'></i></button>
        </div>
    </form>
    
    <div class="remove_choose_user">

        <div class="div_user_remove" onclick="delete_id_user()">
            <i class='bx bx-trash'></i>
            <p>Xóa mục chọn</p>
        </div>

    </div>

</div>
<form action="" class="form" id="form_user">

    <div class="bag_big_page_manager">
        <div class="table_page_manager_statistical">

            <table class="table_manager_statistical">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="selectall" onclick="select_all()">
                        </th>
                        <th>Họ và tên</th>
                        <th>email</th>
                        <th>ngày đăng ký</th>
                        <th>Vai trò</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($getall_user as $get_user): ?>
                        <tr id="box<?php echo $get_user->ID_KH ?>">
                            <td><input type="checkbox" name="checkbox[]" id="<?php echo $get_user->ID_KH ?>"
                                    value="<?php echo $get_user->ID_KH ?>"></td>
                            <td>
                                <?php echo $get_user->NAME_USER ?>
                            </td>
                            <td>
                                <?php echo $get_user->EMAIL_USER ?>
                            </td>
                            <td>
                                <?php echo $get_user->DATE_FOUNDED ?>
                            </td>
                            <td>
                                <div class="hanhdong">
                                    <?php 
                                    if($get_user->STATUS == 0){
                                        echo "Khách hàng";
                                    }else{
                                        echo "ADMIN";
                                    }
                                    ?>

                                </div>

                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>

            </table>
        </div>
    </div>
</form>
</section>

</body>

<script>
    function select_all() {
        if ($('#selectall').prop("checked")) {

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
    function delete_id_user() {

        $.ajax({
            url: 'index.php?act=manager_user',
            type: 'post',
            data: $('#form_user').serialize(),
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

</html>
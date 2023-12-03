<form action="" method="post">

    <div class="info_user">
        <label for="">Tên hiển thị<span style="font-size: 25px;color: red;">*</span></label>
        <input type="text" value="<?php echo $account->NAME_USER ?>">
    </div>

    <div class="info_user">
        <label for="">Địa chỉ email<span style="font-size: 25px;color: red;">*</span></label>
        <input type="text" value="<?php echo $account->EMAIL_USER ?>">
    </div>
    <div class="title_updata_pass">
        <h3>Đổi mật khẩu</h3>
    </div>
    <div class="update_pass">
        <div class="pass">
            <p>Mật khẩu hiện tại</p>
            <input type="text" name="pass_old">
        </div>
        <div class="pass">
            <p>Mật khẩu hiện tại</p>
            <input type="text" name="pass_new" >
        </div>
    </div>
    <div class="button_update_pass">
        <p style="color:red;" ><?php echo $check_pass_old ?></p>
        <button name="button_update_pass" >Lưu thay đổi</button>
    </div>

</form>
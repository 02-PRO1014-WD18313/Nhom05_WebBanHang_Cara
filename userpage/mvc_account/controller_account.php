<?php
if (isset($_GET['logout'])) {
    unset($_SESSION['user_login']);
    header('location:index.php');
}

// phần thông tin người dùng và thay đổi mật khẩu
$check_pass_old="";
if (isset($_POST['button_update_pass'])) {
    $pass_old = $_POST['pass_old'];
    $pass_new = $_POST['pass_new'];
    if ($account->PASSWORD == $pass_old) {
        update_pass($pass_new,$account->ID_KH);
        $_SESSION['update_pass']=$account->NAME_USER;
    }else{
        $check_pass_old="* Sai mật khẩu hiện tại ?";
    }
}
?>
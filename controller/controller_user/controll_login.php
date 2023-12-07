<?php
$checklogin = true;
$block_eronl = "";
$check_empty_login = "";
if (isset($_POST['btn_login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $login = login($email, $pass);

    if (!empty($email) && !empty($pass)) {
        if ($login == true) {
            $_SESSION['user_login'] = $login;
            $checklogin = true;
            header("location:index.php");
        } else {
            $checklogin = false;
        }
    } else {
        $check_empty_login = "Bạn không được bỏ trống!";
    }
}
if ($checklogin == false) {
    $block_eronl = "* Email hoặc mật khẩu của bạn bị sai!";
}
?>
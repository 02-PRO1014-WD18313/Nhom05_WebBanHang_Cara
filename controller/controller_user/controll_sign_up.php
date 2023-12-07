<?php
$check_mail_duplicate="";
$check_empty_sigup="";
if (isset($_POST['btn_sign_up'])) {
    $name_user = $_POST['name_user'];
    $email_user = $_POST['email_user'];
    $pas_user = $_POST['pas_user'];
    $date_founded =date("Y/m/d");
    if (!empty($name_user) && !empty($email_user) && !empty($pas_user)) {
        $check_email = check_email($email_user);
        if ($check_email == false) {
            $_SESSION['check_sign_up']="Đăng ký thành công";
            creat_user($name_user,$email_user,$pas_user,$date_founded);
        } else {
            $check_mail_duplicate=$check_email;
        }
    }else{
        $check_empty_sigup="Không được bỏ trống thông tin!";
    }
}
?>
<?php
include "../moder/pdo.php";
$check_admin="";
if (isset($_POST['btn_login_admin'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $login_admin = login($email, $pass);
    if ($login_admin == true) {
        if ($login_admin->STATUS == 1) {
            header("location:index.php");
            $_SESSION['admin']=$login_admin;
        }else{
          $check_admin="Tài khoản này không được phân quyền";
        }
    }
}
?>
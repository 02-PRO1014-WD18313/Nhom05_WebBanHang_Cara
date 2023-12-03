<?php
if (isset($_GET['logout'])) {
    unset($_SESSION['user_login']);
    header('location:index.php');
}

// phần thông tin người dùng và thay đổi mật khẩu
$check_pass_old = "";
if (isset($_POST['button_update_pass'])) {
    $pass_old = $_POST['pass_old'];
    $pass_new = $_POST['pass_new'];
    if ($account->PASSWORD == $pass_old) {
        update_pass($pass_new, $account->ID_KH);
        $_SESSION['update_pass'] = $account->NAME_USER;
    } else {
        $check_pass_old = "* Sai mật khẩu hiện tại ?";
    }
}
$getall_older_pending = getall_older();
$order_details_pending = order_details_pending();
if (isset($_GET['info_order_user'])) {
    $getid_order = getid_order($_GET['info_order_user']);
    $getid_order_details = getid_order_details($_GET['info_order_user']);
}
if (isset($_GET['cancel_order'])) {
    $status = 5;
    update_older($status, $_GET['cancel_order']);
    header('location:index.php?href=account&acc=prod_pending');
}
$select_prod_success = select_prod_success();
// foreach ($select_prod_success as $get) {
//     if ($get->ID_KH == $account->ID_KH) {
//         if ($get->STATUS_ORDER == 4) {

//         }
//     }
// }

?>
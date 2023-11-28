<?php
$get_cart = get_cart();
$all_prod_price = 0;
$count=0;
$check_cart_empty="";
foreach ($get_cart as $cart_user) {
    if (isset($_SESSION['user_login'])) {
        $user_session = $_SESSION['user_login'];
        if ($cart_user->ID_KH == $user_session->ID_KH) {
            $getcart_user = $cart_user;
            $all_prod_price += $cart_user->PRICE_VARIANT * $cart_user->SOLUONG_CART;
            $count+=$cart_user->PRICE_VARIANT;
        }
    }
}
if (isset($_POST['btn_update_cart'])) {
    $id_cart = $_POST['id_cart'];
    $soluong = $_POST['soluong'];
    update_cart($id_cart, $soluong);
    header('location:index.php?href=cart');
}
if (isset($_GET['remove_prodcart'])) {
    delete_cart($_GET['remove_prodcart']);
    $_SESSION['remove_cart'] = "Xóa thành công";
    header("location:index.php?href=cart");
}

?>
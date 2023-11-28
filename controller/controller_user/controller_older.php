<?php
if (isset($_SESSION['user_login'])) {
    $user_session = $_SESSION['user_login'];
}
$get_cart = get_cart();
$pay_price_prod = 0;
foreach ($get_cart as $prod_order) {
    if (isset($_SESSION['user_login'])) {
        $user_session = $_SESSION['user_login'];
        if ($prod_order->ID_KH == $user_session->ID_KH) {
            $pay_price_prod += $prod_order->PRICE_VARIANT * $prod_order->SOLUONG_CART;
        }
    }
}

if (isset($_POST['btn_sbm_order'])) {
    $name_user = $_POST['name_user'];
    $phone_number = $_POST['phone_number'];
    $Email_user = $_POST['Email_user'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $commune = $_POST['commune'];
    $date_older = date('Y/m/d');
    $character = '0123456789';
    $code_older = substr("#".str_shuffle($character),0, 6);
    $status=1;
    if (
        !empty($phone_number) &&
        !empty($phone_number) &&
        !empty($phone_number) &&
        !empty($phone_number)
    ) {
           $id_bill=order_informmation($code_older,$_SESSION['user_login']->ID_KH,$name_user, $phone_number, $Email_user, $province, $district, $commune,$pay_price_prod,$date_older,$status);
            echo $id_bill;

        foreach ($get_cart as $cart_user) {
            if (isset($_SESSION['user_login'])) {
                $user_session = $_SESSION['user_login'];
                if ($cart_user->ID_KH == $user_session->ID_KH) {
                    $id_reat_prod = $cart_user->ID_RELATED_PRODUCT;
                    $quanity = $cart_user->SOLUONG_CART;
                    $price = $cart_user->PRICE_VARIANT;
                    oder_details($id_bill,$id_reat_prod, $quanity,$price);

                   $delete_cart_id=$cart_user->ID_CART;
                   delete_cart($delete_cart_id);
                }
            }
        }

    } else {
        echo "ko ok";
    }
}
?>
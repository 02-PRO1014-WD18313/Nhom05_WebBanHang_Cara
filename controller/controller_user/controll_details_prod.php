<?php
if (isset($_GET['id_prod'])) {
    $get_id_prod = get_prod_id($_GET['id_prod']);
}
$getall_size = getall_size();
$getallbienthe = getall_bienthe();
$cong = 0;

$prod_peatured = prod_peatured($get_id_prod->ID_PROD_TYPE);
$check_user = true;
$check_empty = true;
$validate_cart = false;
$get_cart = get_cart();
if (isset($_POST['btn_more_cart'])) {
    $quanity = $_POST['quanyty'];
    if (isset($_SESSION['user_login'])) {

        if (!empty($_POST['prod_color'])) {
            $validate_cart ;
            foreach ($get_cart as $check_prod) {
                if (
                    $check_prod->ID_RELATED_PRODUCT == $_POST['prod_color'] &&
                    $check_prod->ID_KH == $_SESSION['user_login']->ID_KH
                ) {
                    $total_soluong = $check_prod->SOLUONG_CART + $quanity;
                    $id_cart = $check_prod->ID_CART;
                    // echo $_SESSION['user_login']->ID_KH;
                    // echo $check_prod->ID_KH;
                    update_prod_cart($total_soluong, $id_cart);
                    $validate_cart = true;
                    // echo $validate_cart;
                }
            }
            $_SESSION['more_cart']="Thêm thành công";
            if ($validate_cart !=true) {
                more_cart($_SESSION['user_login']->ID_KH, $_POST['prod_color'], $quanity);
            }


        } else {
            $check_empty = false;
        }
    } else {
        $check_user = false;
    }
}
// bình luận theo sản phẩm 
if (isset($_GET['id_prod'])) {
    if (isset($_GET['star'])) {
        $star = $_GET['star'];
        $getid_comment = select_comment($_GET['id_prod'], $star);
    } else {
        $star = "";
    }
    $getid_comment = select_comment($_GET['id_prod'], $star);
}
?>
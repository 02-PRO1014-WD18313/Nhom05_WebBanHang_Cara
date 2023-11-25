<?php
include '../moder/pdo.php';
include 'page/header.php';

if (isset($_GET['href'])) {
    switch ($_GET['href']) {
        case 'shop':

            $getallbienthe = getall_bienthe();
            $getall_menu = getall_type();
            if (isset($_GET['id_type'])) {
                $kyw_type_prod = $_GET['id_type'];
            } else {
                $kyw_type_prod = "";
            }
            $getall_prod_shop = getall_prod_shop($kyw_type_prod);

            include "shop/shop.php";
            break;
        case 'details':
            include "../controller/controller_user/controll_details_prod.php";
            include "shop/product_details.php";
            break;
    }
} else {
    include "../controller/controller_user/home.php";
    include 'page/home.php';
}

include 'page/footer.php';
?>
<?php
session_start();
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
        case 'blog':
            include "shop/blog.php";
            break;
        case 'about':
            include "shop/about.php";
            break;
        case 'contact':
            include "shop/contact.php";
            break;
        case 'login':
            include "../controller/controller_user/controll_login.php";
            include 'kynhap/login.php';
            break;
        case 'sign_up':
            include "../controller/controller_user/controll_sign_up.php";
            include 'kynhap/sign_up.php';
            break;
        case 'cart':
            include "../controller/controller_user/controll_cart.php";
            include "shop/shophing_cart.php";
            break;
        case 'order':
            include "../controller/controller_user/controller_older.php";
            include "shop/older.php";
            break;
        case 'account':
            $account=$_SESSION['user_login'];
            include "mvc_account/controller_account.php";
            include "mvc_account/account.php";
            break;
    }
} else {
    include "../controller/controller_user/home.php";
    include 'page/home.php';
}

include 'page/footer.php';
?>
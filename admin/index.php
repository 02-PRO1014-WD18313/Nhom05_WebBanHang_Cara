<?php
session_start();
include '../moder/pdo.php';
include "main_admin/header.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'product_protfolio':
            include "../controller/controller_admin/prod_typy.php";

            include 'product_type/manager_type.php';
            break;
        case 'more_type':
            include "../controller/controller_admin/prod_typy.php";

            include 'product_type/more_type.php';
            break;
        case 'manager_prod';
            include '../controller/controller_admin/product.php';

            if (isset($_POST['seach_prod'])) {
                $name_kyw = $_POST['keyword'];
            } else {
                $name_kyw = "";
            }

            $getall_prod = getall_prod($name_kyw);

            $count_prod = count_prod();
            $navigation = ceil(count($count_prod) / 10);

            if (isset($_POST['checkbox'][0])) {
                foreach ($_POST['checkbox'] as $list) {
                    delete_prod($list);
                    foreach ($getall_prod as $get) {
                        if ($get->ID_PRODUCT == $list) {
                            unlink("../images_prod/$get->IMAGE");
                        }
                    }
                }
            }

            if (isset($_GET["upd_prod"])) {
                include "product/update_prod.php";
            } else {
                include "product/manager_prod.php";
            }

            break;
        case "more_prod":
            include '../controller/controller_admin/product.php';
            include "product/more_prod.php";
            break;
        case "variant_prod":
            include '../controller/controller_admin/product.php';
            if (isset($_GET['edit_variant'])) {
                include 'product/edit_bienthe.php';
            } else {
                include "product/bienthe.php";
            }
            break;
        case "manager_user":
            include "../controller/controller_admin/contro_user.php";
            include "user/manager_user.php";
            break;
        case "comment":
            include "../controller/controller_admin/controll_coment.php";
            if (isset($_GET['group_coment'])) {
                include "coment/detal_coment.php";
            } else {
                include "coment/manager_comenr.php";
            }
            break;
        case "older":
            include "../controller/controller_admin/controller_older.php";
            // if(isset( $_SESSION['check_confirm'])){
            //     header("location:index.php?act=older");
            // }
            if (isset($_GET['detal_older'])) {
                include "older/detal_older.php";
            } else {
                include "older/manager_older.php";
            }
            break;

    }
} else {
    include "../controller/controller_admin/statistical.php";
    include "main_admin/home.php";
}
include "main_admin/footer.php";
?>
<?php
include "page_acc/header.php";
include "controller_account.php";
if (isset($_GET['acc'])) {
    switch ($_GET['acc']) {
        case 'info_acc':
            include "handle_acc/page_infor_user.php";
            break;
        case 'prod_pending':
            if (isset($_GET['info_order_user'])) {
                include "handle_acc/infor_order_user.php";
            } else {
                include "handle_acc/prod_pending.php";
            }
            break;
        case 'purchased_prod':
            include "handle_acc/purchased_prod.php";
            break;
        case 'comment_prod':
            include "coment_controller.php";
            include "handle_acc/coment_prod.php";   
            break;
    }
} else {
    include "page_acc/home.php";
}

include "page_acc/footer.php";
?>
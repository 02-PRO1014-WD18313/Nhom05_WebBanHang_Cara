<?php
include "page_acc/header.php";
include "controller_account.php";
if (isset($_GET['acc'])) {
    switch ($_GET['acc']) {
        case 'info_acc':
            include "handle_acc/page_infor_user.php";
            break;
    }
} else {
    include "page_acc/home.php";
}

include "page_acc/footer.php";
?>
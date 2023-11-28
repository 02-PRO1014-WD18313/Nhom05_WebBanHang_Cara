<?php
$getall_older = getall_older();
if (isset($_GET['detal_older'])) {
    $getid_order = getid_order($_GET['detal_older']);
    $getid_order_details = getid_order_details($_GET['detal_older']);
}
$getall_confirm_order = getall_confirm_order();

if(isset($_POST['btn_confirm_older'])){
    $confirm=$_POST['confirm'];
    update_older($confirm , $_GET['detal_older']);
    header('location:index.php?act=older&detal_older='.$_GET['detal_older']);
}

if (isset($_POST['checkbox'][0])) {
    foreach ($_POST['checkbox'] as $list) {
        delete_order($list);
        echo $list;
    }
}
?>
<?php
if (isset($_POST['checbox'][0])) {
    foreach ($_POST['checbox'] as $list) {
        delete_type($list);
    }
}
if (isset($_GET['dele_type'])) {
    delete_type($_GET['dele_type']);
    header("location:index.php?act=product_protfolio");
}
$getall_type = getall_type();
$check_moretype = "";
if (isset($_POST['btn_moretype'])) {
    $name_type = $_POST['name_type'];
    if (!empty($name_type)) {
        more_type($name_type);
        $check_moretype = "Thêm thành công";
    }
}
?>
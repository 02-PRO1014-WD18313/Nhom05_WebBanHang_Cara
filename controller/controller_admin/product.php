<?php
// code thêm màu
if (isset($_POST["btn_more_color"])) {
    $name_color = $_POST["name_color"];
    $code_color = $_POST['code_color'];
    if (!empty($name_color)) {
        more_color($name_color, $code_color);
    }
}
$getall_color = getall_color();
//size sản phẩm
if (isset($_POST['btn_size'])) {
    $name_size = $_POST['name_size'];
    if (!empty($name_size)) {
        more_size_prod($name_size);
    }
}

$getall_size = getall_size();
//thêm sản phẩm
$getall_type = getall_type();
if (isset($_POST['btn_more_prod'])) {
    $character = '0123456789abcdefghijklmnopqrstuvwxyz';

    $code_prod = substr(str_shuffle($character), 0, 5);
    $name_prod = $_POST['name_prod'];
    $choose_type = $_POST['choose_type'];
    $new_price = $_POST['new_price'];
    $old_price = $_POST['old_price'];

    $image = $_FILES['images']['name'];
    $image_tmp = $_FILES['images']['tmp_name'];

    $describe = $_POST['describe'];
    $data_added = date('Y-m-d');
    if (
        !empty($name_prod) && !empty($choose_type)
        && !empty($new_price) && !empty($old_price)
    ) {
       $more_prod=more_product(
            $code_prod,
            $name_prod,
            $choose_type,
            $new_price,
            $old_price,
            $image,
            $describe,
            $data_added
        );
        move_uploaded_file($image_tmp, '../images_prod/' . $image);
        header('location:index.php?act=variant_prod&bienthe='.$more_prod);
    }
}
//edit sản phẩm
if (isset($_GET['upd_prod'])) {
    $getid_prod = getid_prod($_GET['upd_prod']);
}
if (isset($_POST['updata_prod'])) {
    $upd_name = $_POST['updname'];

    $upd_img = $_FILES['upd_img']['name'];
    if ($upd_img == "") {
        $upd_img = $getid_prod->IMAGE;
    } else {
        unlink("../images_prod/" . $getid_prod->IMAGE);
        $upd_img = $_FILES['upd_img']['name'];
    }
    $updimg_tmp = $_FILES['upd_img']['tmp_name'];

    $upd_new = $_POST['upd_new'];
    $upd_old = $_POST['upd_old'];
    $upd_menu = $_POST['upd_menu'];
    $describe_updata_prod=$_POST['describe_updata_prod'];

    update_prod($_GET['upd_prod'], $upd_name, $upd_img, $upd_new, $upd_old, $upd_menu, $describe_updata_prod);
    move_uploaded_file($updimg_tmp, "../images_prod/" . $upd_img);
    header("location:/du_an_1/admin/index.php?act=manager_prod");
}
if (isset($_GET['del_prod'])) {
    delete_prod($_GET['del_prod']);
    header('location:index.php?act=manager_prod');
}


// biến thể
if (isset($_GET['bienthe'])) {
    $getid_product = getid_prod($_GET['bienthe']);
    $getid_variant = getid_variant($_GET['bienthe']);
}


if (isset($_POST['btn_variant'])) {
    $color_variant = $_POST['color_variant'];

    $image_variant = $_FILES['image_variant']['name'];
    $image_variant_tmp = $_FILES['image_variant']['tmp_name'];

    $price_variant = $_POST['price_variant'];
    if (!empty($color_variant)) {
        $_SESSION['status'] = 'Thêm thành công';
        more_variant($_GET['bienthe'], $color_variant, $image_variant, $price_variant);
        move_uploaded_file($image_variant_tmp, '../images_prod/' . $image_variant);
        header('location:/du_an_1/admin/index.php?act=variant_prod&bienthe=' . $_GET['bienthe']);
    }
}
if (isset($_GET['del_variant'])) {
    $del_img_variant=getid_variant_prod($_GET['del_variant']);
    unlink('../images_prod/'.$del_img_variant->IMAGE_VARIANT);
}
if (isset($_GET['del_variant'])) {
    delete_variant($_GET['del_variant']);
    header('location:/du_an_1/admin/index.php?act=variant_prod&bienthe=' . $_GET['bienthe']);
}

// edit biến thể
if (isset($_GET['edit_variant'])) {
    $getid_variant_prod = getid_variant_prod($_GET['edit_variant']);
}
if (isset($_POST['btn_edit_variant'])) {
    $img_variant = $_FILES['img_variant']['name'];
    if($img_variant == '') {
        $img_variant= $getid_variant_prod->IMAGE_VARIANT ;
    }else{
        unlink('../images_prod/'.$getid_variant_prod->IMAGE_VARIANT);
        $img_variant = $_FILES['img_variant']['name'];
    }
    $img_variant_tmp = $_FILES['img_variant']['tmp_name'];

    $price_variant_edit= $_POST['price_variant'];
    $menu_color_variant = $_POST['menu_color_variant'];

    edit_variant($_GET['edit_variant'],$img_variant,$price_variant_edit,$menu_color_variant);
    move_uploaded_file($img_variant_tmp, '../images_prod/'. $img_variant);
    header('location:index.php?act=variant_prod&bienthe='.$_GET['bienthe']);
}
?>
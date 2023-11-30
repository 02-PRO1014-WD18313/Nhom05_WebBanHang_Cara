<?php
include 'connect.php';
// phần danh mục sản phẩm
function more_type($name_type)
{
    $conn = connect();
    $query = $conn->query("INSERT INTO `product_type`(`NAME_PROD_TYPE`) VALUES ('$name_type')");
}
function getall_type()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM product_type");
    $result = $query->fetchAll();
    return $result;
}
function delete_type($delete_type)
{
    $conn = connect();
    $conn->query("DELETE FROM `product_type` WHERE ID_PROD_TYPE=" . $delete_type);
}

// moder sản phẩm , màu , kích cỡ
//màu
function more_color($name_color, $code_color)
{
    $conn = connect();
    $conn->query("INSERT INTO `color`(`NAME_COLOR`, `CODE_COLOR`) 
    VALUES ('$name_color','$code_color')");
}
function getall_color()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM color");
    $result = $query->fetchAll();
    return $result;
}
//size
function more_size_prod($size_prod)
{
    $conn = connect();
    $query = $conn->query("INSERT INTO `size`(`NAME_SIZE`) VALUES ('$size_prod')");
}
function getall_size()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `size` ");
    $result = $query->fetchAll();
    return $result;
}
//thêm sản phẩm
function more_product(
    $code_prod,
    $name_prod,
    $choose_type,
    $new_price,
    $old_price,
    $image,
    $describe,
    $data_added
) {
    $conn = connect();
    $conn->query("INSERT INTO `product`(`CODE_PROD`,`NAME_PROD`, `IMAGE`, `NEW_PRICE`,`OLD_PRICE`, `ID_PROD_TYPE`, `DESCRIBE`, `DATE_ADDED`) VALUES 
    ('$code_prod','$name_prod','$image','$new_price','$old_price','$choose_type','$describe',' $data_added') ");
}
function getall_prod($name_kyw)
{
    if (isset($_GET["page"])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $row = 10;
    $from = ($page - 1) * $row;
    $conn = connect();

    $query = ("SELECT * FROM product JOIN product_type ON 
    product.ID_PROD_TYPE=product_type.ID_PROD_TYPE WHERE 1");

    if ($name_kyw != "") {
        $query .= " AND NAME_PROD LIKE'%" . $name_kyw . "%'";
    }

    $query .= " LIMIT $from , $row";

    $result = $conn->query($query);
    return $result;
}
//đếm sản phẩm
function count_prod()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM product");
    $result = $query->fetchAll();
    return $result;
}
//
function delete_prod($id_prod)
{
    $conn = connect();
    $query = $conn->query("DELETE FROM `product` WHERE ID_PRODUCT=" . $id_prod);
}
function getid_prod($id_prod)
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM product JOIN product_type ON 
    product.ID_PROD_TYPE=product_type.ID_PROD_TYPE WHERE ID_PRODUCT=" . $id_prod);
    $result = $query->fetch();
    return $result;
}
function update_prod($id_prod, $upd_name, $upd_img, $upd_new, $upd_old, $upd_menu)
{
    $conn = connect();
    $query = $conn->query("UPDATE `product` SET 
  `NAME_PROD`='$upd_name',`IMAGE`='$upd_img',`NEW_PRICE`='$upd_new',
  `OLD_PRICE`='$upd_old',`ID_PROD_TYPE`='$upd_menu' WHERE`ID_PRODUCT`=" . $id_prod);
}
// biến thể sản phẩm
function more_variant($id_prod, $color_variant, $image, $price_variant)
{
    $conn = connect();
    $query = $conn->query("INSERT INTO `related_product`(`IMAGE_VARIANT`, `ID_COLOR`, `ID_PRODUCT`,`PRICE_VARIANT`) 
    VALUES ('$image','$color_variant','$id_prod','$price_variant')");
}
function getid_variant($id_prod)
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `related_product` JOIN product ON related_product.ID_PRODUCT=product.ID_PRODUCT 
    JOIN color ON color.ID_COLOR=related_product.ID_COLOR  WHERE product.ID_PRODUCT=" . $id_prod);
    $result = $query->fetchAll();
    return $result;
}
function delete_variant($id_prod)
{
    $conn = connect();
    $query = $conn->query("DELETE FROM `related_product` WHERE ID_RELATED_PRODUCT=" . $id_prod);
}
function getid_variant_prod($id_prod)
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM related_product 
    JOIN color ON color.ID_COLOR=related_product.ID_COLOR
    WHERE ID_RELATED_PRODUCT=" . $id_prod);
    $result = $query->fetch();
    return $result;
}
function edit_variant($id, $image_variant, $price_variant, $menu_color_variant)
{
    $conn = connect();
    $query = $conn->query("UPDATE `related_product` SET `IMAGE_VARIANT`='$image_variant',`PRICE_VARIANT`=' $price_variant',`ID_COLOR`='$menu_color_variant'
  WHERE `ID_RELATED_PRODUCT`=" . $id);
}
// tài khoản người dùng 
function getall_user($kyw_name_user)
{
    $conn = connect();
    $query = ("SELECT * FROM user WHERE 1");
    if ($kyw_name_user != "") {
        $query .= " AND NAME_USER LIKE '%" . $kyw_name_user . "%'";
    }
    $result = $conn->query($query);
    return $result;
}
function delete_user($id_usser)
{
    $conn = connect();
    $query = $conn->query("DELETE FROM `user` WHERE ID_KH=" . $id_usser);
}
// thống kê số bình luận
function binhluan($comment_content, $id_user, $id_prod, $date_comment)
{
    $conn = connect();
    $conn->query("INSERT INTO `comment`(`COMMENTARY_CONTENT`, `ID_KH`, `ID_PRODUCT`, `DATE_COMENT`) 
    VALUES ('$comment_content','$id_user','$id_prod','$date_comment')");
}
function getall_coment()
{
    $conn = connect();
    $query = $conn->query("SELECT product.ID_PRODUCT,product.NAME_PROD,product.CODE_PROD , user.NAME_USER , comment.COMMENTARY_CONTENT, COUNT(product.ID_PRODUCT) as 'count_coment_prod' ,MIN(COMMENT.DATE_COMENT) AS 'min_date' , MAX(COMMENT.DATE_COMENT) as 'max_date'
    FROM `comment` JOIN product ON comment.ID_PRODUCT=product.ID_PRODUCT
    JOIN user ON user.ID_KH=comment.ID_KH
    GROUP BY product.ID_PRODUCT");
    $result = $query->fetchAll();
    return $result;
}
function slec_coment_idprod($id_prod)
{
    $conn = connect();
    $query = $conn->query("SELECT comment.ID_COMMENT,comment.COMMENTARY_CONTENT,comment.DATE_COMENT,product.ID_PRODUCT,user.NAME_USER FROM comment JOIN product ON comment.ID_PRODUCT=product.ID_PRODUCT
    JOIN user ON comment.ID_KH=user.ID_KH
    WHERE product.ID_PRODUCT=" . $id_prod);
    $result = $query->fetchAll();
    return $result;
}
function del_comment($id_comment)
{
    $conn = connect();
    $query = $conn->query("DELETE FROM `comment` WHERE ID_COMMENT=" . $id_comment);
}
// phần thống kế của trang admin
function chart_type()
{
    $conn = connect();
    $query = $conn->query("SELECT  product_type.NAME_PROD_TYPE,SUM(product.NUMBER_OF_ORDERS) as 'cong' FROM `product_type` JOIN
    product ON product_type.ID_PROD_TYPE=product.ID_PROD_TYPE
    GROUP BY product_type.ID_PROD_TYPE");
    $result = $query->fetchAll();
    return $result;
}
function prod_view_order()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM product JOIN product_type ON 
    product.ID_PROD_TYPE=product_type.ID_PROD_TYPE
    ORDER BY product.NUMBER_OF_ORDERS DESC LIMIT 10");
    $result = $query->fetchAll();
    return $result;
}
/////////////////////////////////////////////////////////////
//phần trang chủ
function top_8_prodnew()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `product` 
  JOIN related_product ON product.ID_PRODUCT=related_product.ID_PRODUCT
  JOIN color ON related_product.ID_COLOR=color.ID_COLOR
  JOIN product_type ON product_type.ID_PROD_TYPE=product.ID_PROD_TYPE
  GROUP BY product.ID_PRODUCT
  ORDER BY product.DATE_ADDED DESC LIMIT 8");
    $result = $query->fetchAll();
    return $result;
}
function getall_bienthe()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `related_product`
    JOIN color ON related_product.ID_COLOR=color.ID_COLOR");
    $result = $query->fetchAll();
    return $result;
}
function top_prod_older()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `product` 
    JOIN related_product ON product.ID_PRODUCT=related_product.ID_PRODUCT
    JOIN color ON related_product.ID_COLOR=color.ID_COLOR
    JOIN product_type ON product_type.ID_PROD_TYPE=product.ID_PROD_TYPE
    GROUP BY product.ID_PRODUCT
    ORDER BY product.NUMBER_OF_ORDERS DESC LIMIT 8");
    $result = $query->fetchAll();
    return $result;
}

function getall_prod_shop($kyw_type_prod, $kyw, $kyw_pri, $from_price, $from_to)
{
    $conn = connect();
    $query = ("SELECT * FROM `product` 
    JOIN product_type ON product_type.ID_PROD_TYPE=product.ID_PROD_TYPE ");
    if ($kyw_type_prod != "") {
        $query .= " AND product_type.ID_PROD_TYPE=" . $kyw_type_prod;
    }
    if ($from_price != "" && $from_to != "") {
        $query .= " WHERE product.NEW_PRICE BETWEEN  " . $from_price . " AND " . $from_to;
    }
    if ($kyw != "") {
        $query .= " ORDER BY NAME_PROD " . $kyw;
    }
    if ($kyw_pri != "") {
        $query .= " ORDER BY NEW_PRICE " . $kyw_pri;
    }
    $resule = $conn->query($query);
    return $resule;
}
function get_prod_id($id)
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `product`
    JOIN product_type ON product_type.ID_PROD_TYPE=product.ID_PROD_TYPE
    WHERE product.ID_PRODUCT=" . $id);
    $result = $query->fetch();
    return $result;
}
function prod_peatured($id_prod_type)
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `product`
    JOIN product_type ON product_type.ID_PROD_TYPE=product.ID_PROD_TYPE
    WHERE product_type.ID_PROD_TYPE=" . $id_prod_type);
    $result = $query->fetchAll();
    return $result;
}
function update_view_order_prod($id_prod_view, $count_view_older)
{
    $conn = connect();
    $conn->query("UPDATE `product` SET `NUMBER_OF_ORDERS`='$count_view_older' 
    WHERE `ID_PRODUCT`=" . $id_prod_view);
}
function login($email, $pass)
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `user` WHERE EMAIL_USER='$email' AND PASSWORD='$pass' ");
    $result = $query->fetch();
    return $result;
}
function get_user()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `user`");
    $result = $query->fetchAll();
    return $result;
}
function check_email($email_user)
{
    $get_user = get_user();
    foreach ($get_user as $get) {
        if ($get->EMAIL_USER == $email_user) {
            return "* Email này đã được sử dụng !";
        }
    }
}
function creat_user($name_user, $email_user, $pas_user, $date_founded)
{
    $conn = connect();
    $query = $conn->query("INSERT INTO `user`(`NAME_USER`, `EMAIL_USER`, `PASSWORD`, `DATE_FOUNDED`) VALUES
     ('$name_user','$email_user','$pas_user','$date_founded')");
}
// phần giỏ hàng
function get_cart()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `cart` 
    JOIN user ON cart.ID_KH=user.ID_KH
    JOIN related_product ON related_product.ID_RELATED_PRODUCT=cart.ID_RELATED_PRODUCT
    JOIN product ON  related_product.ID_PRODUCT=product.ID_PRODUCT
    JOIN color ON  related_product.ID_COLOR=color.ID_color");
    $result = $query->fetchAll();
    return $result;
}
function update_cart($id_cart, $soluong)
{
    $conn = connect();
    $query = $conn->query("UPDATE `cart` SET `SOLUONG_CART`='$soluong'
     WHERE `ID_CART`=" . $id_cart);
}
function delete_cart($id_cart)
{
    $conn = connect();
    $query = $conn->query("DELETE FROM `cart` WHERE `ID_CART`=" . $id_cart);
}
// phần thanh toán và đặt hàng
function getall_older()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `order_prod` 
    JOIN order_details ON order_prod.ID_ORDER=order_details.ID_ORDER 
    GROUP BY order_prod.ID_ORDER");
    $result = $query->fetchAll();
    return $result;
}
function order_informmation($code_older, $id_kh, $name_user, $phone_number, $Email_user, $province, $district, $commune, $pay_price_prod, $date_older, $status)
{
    $conn = connect();
    $conn->query("INSERT INTO `order_prod`( `CODE_ORDER`,`ID_KH`,`NAME_USER_ORDER`, `PHONE_NUMBER`, `EMAIL_ADDRESS`, `VIETNAM_PROVINCE`, `VIETNAM_DISTRICT`, `VIETNAM_COMMUNE`, `TOTAL`, `DATA_ORDER`,`STATUS_ORDER`) VALUES
     ('$code_older','$id_kh','$name_user','$phone_number','$Email_user','$province','$district','$commune','$pay_price_prod','$date_older','$status')");
    $last_id = $conn->lastInsertId();
    return $last_id;
}
function oder_details($id_bill, $id_reat_prod, $quanity, $price)
{
    $conn = connect();
    $conn->query("INSERT INTO `order_details`(`ID_ORDER`, `ID_RELATED_PRODUCT`, `QUANITY`, `PRICE`) VALUES
     ('$id_bill','$id_reat_prod','$quanity','$price')");
}
function more_cart($id_kh, $id_reat_prod, $quanity)
{
    $conn = connect();
    $conn->query("INSERT INTO `cart`( `ID_KH`, `ID_RELATED_PRODUCT`, `SOLUONG_CART`) 
    VALUES ('$id_kh','$id_reat_prod','$quanity')");
}
function update_prod_cart($total_soluong, $id_cart)
{
    $conn = connect();
    $conn->query("UPDATE `cart` SET `SOLUONG_CART`='$total_soluong' WHERE `ID_CART`=" . $id_cart);
}
function getid_order($id_order)
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `order_prod` 
    WHERE `ID_ORDER` =" . $id_order);
    $result = $query->fetch();
    return $result;
}
function getid_order_details($id_order)
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `order_details`
    JOIN related_product ON order_details.ID_RELATED_PRODUCT=related_product.ID_RELATED_PRODUCT
    JOIN product ON product.ID_PRODUCT=related_product.ID_PRODUCT
    JOIN color ON related_product.ID_COLOR=color.ID_COLOR
    WHERE `ID_ORDER` =" . $id_order);
    $result = $query->fetchAll();
    return $result;
}
function update_older($confirm, $id_order)
{
    $conn = connect();
    $query = $conn->query("UPDATE `order_prod` SET `STATUS_ORDER`='$confirm' 
    WHERE `ID_ORDER`=" . $id_order);
}
function getall_confirm_order()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `confirm_order` ");
    $result = $query->fetchAll();
    return $result;
}
function delete_order($list)
{
    $conn = connect();
    $query = $conn->query("DELETE FROM `order_prod` WHERE ID_ORDER=" . $list);
}
// pdo phần chi tiết tài khoản người dùng
function update_pass($pass_new, $id_kh)
{
    $conn = connect();
    $conn->query("UPDATE `user` SET `PASSWORD`='$pass_new' WHERE `ID_KH`=" . $id_kh);
}
function order_details_pending()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `order_details`
    JOIN related_product ON order_details.ID_RELATED_PRODUCT=related_product.ID_RELATED_PRODUCT
    JOIN product ON product.ID_PRODUCT=related_product.ID_PRODUCT
    JOIN color ON related_product.ID_COLOR=color.ID_COLOR");
    $result = $query->fetchAll();
    return $result;
}
function select_prod_success()
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `order_prod` 
    JOIN order_details ON order_prod.ID_ORDER=order_details.ID_ORDER 
    JOIN related_product ON related_product.ID_RELATED_PRODUCT=order_details.ID_RELATED_PRODUCT
    JOIN product ON product.ID_PRODUCT=related_product.ID_PRODUCT
    JOIN color ON color.ID_COLOR=related_product.ID_COLOR");
    $result = $query->fetchAll();
    return $result;
}
function getprice_minmax()
{
    $conn = connect();
    $query = $conn->query("SELECT MIN(NEW_PRICE) as 'PRICE_MIN' , MAX(NEW_PRICE) as 'PRICE_MAX'
    FROM `product` LIMIT 1");
    $result = $query->fetch();
    return $result;
}
?>
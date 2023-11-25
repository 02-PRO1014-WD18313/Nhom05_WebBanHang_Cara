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
<<<<<<< HEAD
    
    $query =("SELECT * FROM product JOIN product_type ON 
    product.ID_PROD_TYPE=product_type.ID_PROD_TYPE WHERE 1");

    if($name_kyw != ""){
        $query .=" AND NAME_PROD LIKE'%".$name_kyw."%'";
    }

    $query .=" LIMIT $from , $row";
=======

    $query = ("SELECT * FROM product JOIN product_type ON 
    product.ID_PROD_TYPE=product_type.ID_PROD_TYPE WHERE 1");

    if ($name_kyw != "") {
        $query .= " AND NAME_PROD LIKE'%" . $name_kyw . "%'";
    }

    $query .= " LIMIT $from , $row";
>>>>>>> 9cc30c6534178b4294447876bc48832c30c2bb3a

    $result = $conn->query($query);
    return $result;
}
//đếm sản phẩm
<<<<<<< HEAD
function count_prod(){
=======
function count_prod()
{
>>>>>>> 9cc30c6534178b4294447876bc48832c30c2bb3a
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
    $query = $conn->query("SELECT * FROM related_product WHERE ID_RELATED_PRODUCT=" . $id_prod);
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
<<<<<<< HEAD
function getall_user($kyw_name_user){
    $conn=connect();
    $query = ("SELECT * FROM user WHERE 1");
    if($kyw_name_user !=""){
       $query .= " AND NAME_USER LIKE '%".$kyw_name_user."%'"; 
=======
function getall_user($kyw_name_user)
{
    $conn = connect();
    $query = ("SELECT * FROM user WHERE 1");
    if ($kyw_name_user != "") {
        $query .= " AND NAME_USER LIKE '%" . $kyw_name_user . "%'";
>>>>>>> 9cc30c6534178b4294447876bc48832c30c2bb3a
    }
    $result = $conn->query($query);
    return $result;
}
<<<<<<< HEAD
function delete_user($id_usser){
    $conn=connect();
    $query = $conn->query("DELETE FROM `user` WHERE ID_KH=".$id_usser);
}
// thống kê số bình luận
function getall_coment(){
    $conn=connect();
=======
function delete_user($id_usser)
{
    $conn = connect();
    $query = $conn->query("DELETE FROM `user` WHERE ID_KH=" . $id_usser);
}
// thống kê số bình luận
function getall_coment()
{
    $conn = connect();
>>>>>>> 9cc30c6534178b4294447876bc48832c30c2bb3a
    $query = $conn->query("SELECT product.ID_PRODUCT,product.NAME_PROD,product.CODE_PROD , user.NAME_USER , comment.COMMENTARY_CONTENT, COUNT(product.ID_PRODUCT) as 'count_coment_prod' ,MIN(COMMENT.DATE_COMENT) AS 'min_date' , MAX(COMMENT.DATE_COMENT) as 'max_date'
    FROM `comment` JOIN product ON comment.ID_PRODUCT=product.ID_PRODUCT
    JOIN user ON user.ID_KH=comment.ID_KH
    GROUP BY product.ID_PRODUCT");
    $result = $query->fetchAll();
    return $result;
}
<<<<<<< HEAD
 function slec_coment_idprod($id_prod){
    $conn = connect();
    $query = $conn->query("SELECT comment.ID_COMMENT,comment.COMMENTARY_CONTENT,comment.DATE_COMENT,product.ID_PRODUCT,user.NAME_USER FROM comment JOIN product ON comment.ID_PRODUCT=product.ID_PRODUCT
    JOIN user ON comment.ID_KH=user.ID_KH
    WHERE product.ID_PRODUCT=".$id_prod);
    $result = $query->fetchAll();
    return $result;
 }
 function del_comment($id_comment){
    $conn=connect();
    $query=$conn->query("DELETE FROM `comment` WHERE ID_COMMENT=".$id_comment);
=======
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

function getall_prod_shop($kyw_type_prod)
{
    $conn = connect();
    $query = ("SELECT * FROM `product` 
    JOIN product_type ON product_type.ID_PROD_TYPE=product.ID_PROD_TYPE WHERE 1");
    if($kyw_type_prod !=""){
        $query .=" AND product_type.ID_PROD_TYPE=".$kyw_type_prod;
    }
    $resule=$conn->query($query);
    return $resule;
}
function get_prod_id($id)
{
    $conn = connect();
    $query = $conn->query("SELECT * FROM `product`
    JOIN product_type ON product_type.ID_PROD_TYPE=product.ID_PROD_TYPE
    WHERE product.ID_PRODUCT=".$id);
    $result=$query->fetch();
    return $result;
}
 function prod_peatured($id_prod_type){
    $conn = connect();
    $query = $conn->query("SELECT * FROM `product`
    JOIN product_type ON product_type.ID_PROD_TYPE=product.ID_PROD_TYPE
    WHERE product_type.ID_PROD_TYPE=".$id_prod_type);
    $result=$query->fetchAll();
    return $result;
>>>>>>> 9cc30c6534178b4294447876bc48832c30c2bb3a
 }
?>
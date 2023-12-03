<?php 
// phần logic của người dùng bình luận
if (isset($_GET['id_rele']) || isset($_GET['id_prod'])) {
    $getid_variant = getid_variant_prod($_GET['id_rele']);
    $comment_prod = getid_prod($_GET['id_prod']);
}
// if (isset($_GET['id_prod'])) {
//     $comment_prod = getid_prod($_GET['id_prod']);
// }

if (isset($_POST['btn_comment'])) {
    $id_user = $_POST['id_user'];
    $comment_content = $_POST['comment_content'];
    $star=$_POST['star'];
    $date_comment=date("Y/m/d");
    binhluan($comment_content, $id_user,$_GET['id_prod'],$date_comment,$star);
    $_SESSION['check_comment']="Bình luận thành công";
}
?>
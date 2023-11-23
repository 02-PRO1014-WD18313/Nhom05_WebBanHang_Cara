<?php
include '../moder/pdo.php';
include 'page/header.php';

if (isset($_GET['href'])) {

} else {
    include "../controller/controller_user/home.php";
    include 'page/home.php';
}

include 'page/footer.php';
?>
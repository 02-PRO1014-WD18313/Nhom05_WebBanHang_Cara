<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech2etc Ecommerce Tutorial</title>
    <link rel="stylesheet" href="/fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css_older/oder.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />

</head>

<body>
    <div class="contructer">
        <section id="header">
            <p onclick="clickmenu()" class="multi_level_menu"><i style="font-size: 25px;" class='bx bx-menu'></i></p>
            <a href="#"><img src="img/logo-removebg-preview.png" class="logo" alt=""></a>

            <div class="flex_menu">
                <ul id="navbar">
                    <p class="x_menu_mobile" onclick="clickremove()"><i class='bx bx-x'></i></i></p>
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="index.php?href=shop">Shop</a></li>
                    <li><a href="index.php?href=blog">Blog</a></li>
                    <li><a href="index.php?href=about">About</a></li>
                    <li><a href="index.php?href=contact">Contact</a></li>
                    <li><a href=""><i class='bx bx-search'></i></a></li>
                    <?php if (isset($_SESSION['user_login'])) { ?>
                        <li><a href="index.php?href=account"><i class='bx bx-user-circle'></i></a></li>
                    <?php }else{ ?>
                        <li><a href="index.php?href=login"><i class='bx bx-user-circle'></i></a></li>
                        <?php } ?>
                    </li>
                </ul>
                <ul class="cart_menu">
                    <li><a href="index.php?href=cart"><i class='bx bxs-cart'></i></a></li>
                </ul>

            </div>
        </section>
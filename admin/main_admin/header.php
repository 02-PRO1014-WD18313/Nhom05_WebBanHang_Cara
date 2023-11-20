<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PAGE ADMIN</title>
</head>

<body>
    <nav class="slidebar" id="slidebars">
        <header>
            <div class="image_text">
                <span class="image">
                    <img src="image/logo-removebg-preview.png" alt="">
                </span>
            </div>
            <div onclick="change()" class="togeth bx bx-chevron-right" id="change">
            </div>

        </header>

        <div class="menu_bar">
            <div class="menu">
                <ul class="menu_link">
                    <li class="nav_link">
                        <a href="index.php" onclick="click_menu(1)">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Thống kê</span>
                        </a>
                    </li>
                    <li class="nav_link " >
                        <a href="index.php?act=product_protfolio" onclick="click_menu(2)">
                            <i class='bx bx-purchase-tag'></i>
                            <span>Danh mục hàng</span>
                        </a>
                    </li>
                    <li class="nav_link" >
                        <a href="index.php?act=manager_prod">
                            <i class='bx bxs-food-menu'></i>
                            <span>Sản phẩm</span>
                        </a>
                    </li>
                    <li class="nav_link" >
                        <a href="index.php?act=manager_user">
                            <i class="fa-regular fa-user"></i>
                            <span>Người dùng</span>
                        </a>
                    </li>
                    <li class="nav_link" >
                        <a href="index.php?act=comment">
                            <i class="fa-solid fa-comment-dots"></i>
                            <span>Quản lý bình luận</span>
                        </a>
                    </li>
                    <li class="nav_link" >
                        <a href="index.php?act=older">
                            <i class="fa-brands fa-cc-amazon-pay"></i>
                            <span>Quản lý đặt hàng</span>
                        </a>
                    </li>
                    <li class="nav_link" id="log_out" >
                        <a href="">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Đăng xuất</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="home">

        <div class="title_home">
            <div class="contain_title_home">
                <div class="h_title_home">
                    <h2>Xin chào Admin</h2>
                </div>
                <div class="user_admin">
                    <div class="text_admin">
                        <p> phúc</p>
                    </div>
                    <div class="image_admin">
                        <img src="image/3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
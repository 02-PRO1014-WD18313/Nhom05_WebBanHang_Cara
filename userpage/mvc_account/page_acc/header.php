<section id="account-details" class="section-p1">
    <div class="account">
        <a href="#"><img src="img/logo.png" alt=""></a>
        <h3>
            <?php echo $account->NAME_USER ?>
        </h3>
        <h5>
            <?php echo $account->EMAIL_USER ?>
        </h5>
        <hr>
        <div>
            <ul>
                <li>
                    <i class='bx bxs-user'></i>
                    <a href="index.php?href=account&acc=info_acc" style="  text-decoration: none; color:black;">
                        Thông tin tài khoản
                    </a>

                </li>
                <li>
                    <i class='bx bx-log-out'></i>
                    <a href="index.php?href=account&acc=true&logout" style="  text-decoration: none;color:black;" >
                        Log out
                    </a>

                </li>
            </ul>
        </div>
    </div>

    <div class="account2">
        <div class="box1">
            <a href="index.php?href=account&acc=purchased_prod" class="a_inpor_prod1">
                <div class="info_prod">
                    <span><box-icon name='cart-download'></box-icon></span>
                    <p>Sản Phẩm đã mua</p>
                </div>
            </a>
            <a href="index.php?href=account&acc=prod_pending" class="a_inpor_prod2">
                <div class="info_prod1">
                    <span><box-icon type='solid' name='shopping-bags'></box-icon></span>
                    <p>Sản phẩm hàng chờ</p>
                </div>
            </a>
        </div>
        <div class="box2">
            <div class="home_more_prod">
                <div class="box2_flex">
                    <div class="title_box2">
                        <p>Chưa có sản phẩm nào</p>
                    </div>
                    <div class="body_box2">
                        <a href="index.php?href=shop">Tìm kiếm sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="home_acc">

<section id="page-header">
    <h2>#stayhome</h2>
    <p>Save more with coupons & up to 70% off!</p>
</section>
<section id="menu-small">
    <div class="menu1">
        <ul>
            <li class="li_menu_shop">
                <p>Danh mục</p>
                <ul class="ul_smail">
                    <?php foreach ($getall_menu as $menu): ?>
                        <li><a href="index.php?href=shop&id_type=<?php echo $menu->ID_PROD_TYPE ?>">
                                <?php echo $menu->NAME_PROD_TYPE ?>
                            </a></li>
                    <?php endforeach ?>
                </ul>

            </li>
        </ul>
    </div>
    <div class="tong_bp_loc">
        <div class="controller_boloc">
            <div class="group_form">
                <select name="" id="" class="form_control select-filter">
                    <option value="0">---Lọc theo---</option>
                    <option value="&kyw=asc">Ký tự A-Z</option>
                    <option value="&kyw=desc">Ký tự Z-A</option>
                    <option value="&price=asc">Giá tăng dần</option>
                    <option value="&price=desc">Giá giảm dần dần</option>
                </select>
            </div>
        </div>
    </div>
</section>
<div class="div_thanhkeo">
    <div class="thanh_timhoanggia">
        <form action="" class="form_loc" method="post">
            <div class="flex_thanh">
                <p>
                    <label for="amount">Lọc khoảng giá:</label>
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                </p>
                <input type="hidden" class="price_form" name="from_price">
                <input type="hidden" class="price_to" name="from_to">
                <div id="slider-range"></div>
            </div>
            <div class="btn_loc">
                <button name="btn_loc" >Lọc</button>
            </div>

        </form>
    </div>
</div>

<style>
    .tong_bp_loc {
        padding-top: 30px;
        margin-left: 60px;
        display: flex;
        justify-content: space-between;
    }

    .form_loc {
        display: flex;
    }

    .div_thanhkeo {
        position: relative;
    }

    .btn_loc {
        padding-top: 14px;
    }
    .btn_loc button{
        background-color: #ffaa49;
        color: white;
        font-weight: 600;
    }

    .thanh_timhoanggia {
        position: absolute;
        top: 0px;
        right: 100px;
    }

    .group_form select {
        padding: 5px;
        border: 1px solid rgb(173, 173, 173);
        border-radius: 6px;
    }
</style>

<section id="product1" class="section-p1">
    <div class="pro-container" style="margin-top: 25px;">
        <?php foreach ($getall_prod_shop as $shop): ?>
            <div class="pro">

                <a href="index.php?href=details&id_prod=<?php echo $shop->ID_PRODUCT ?>&shop">
                    <div class="img_home">
                        <img src="../images_prod/<?php echo $shop->IMAGE ?>" alt="">
                    </div>
                </a>

                <div class="des">
                    <span>Danh mục:
                        <?php echo $shop->NAME_PROD_TYPE ?>
                    </span>
                    <h5>
                        <?php echo $shop->NAME_PROD ?>
                    </h5>

                    <div class="flex_price_and_color_prod">
                        <h4>
                            <?php echo number_format($shop->NEW_PRICE, '0', ',', '.') . 'đ' ?>

                            <del>
                                <?php echo number_format($shop->OLD_PRICE, '0', ',', '.') . 'đ' ?>
                            </del>
                        </h4>
                        <div class="color_product">
                            <?php foreach ($getallbienthe as $bienthe): ?>
                                <?php if ($bienthe->ID_PRODUCT == $shop->ID_PRODUCT): ?>
                                    <div class="color_div" style="background-color: <?php echo $bienthe->CODE_COLOR ?>;"></div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach ?>

    </div>
</section>

<!-- <section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
</section> -->

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newletters</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers</span> </p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="normal">Sign up</button>
    </div>
</section>
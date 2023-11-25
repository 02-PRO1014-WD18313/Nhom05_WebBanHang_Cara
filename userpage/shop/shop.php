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
                    <?php foreach($getall_menu as $menu): ?>
                    <li><a href="index.php?href=shop&id_type=<?php echo $menu->ID_PROD_TYPE ?>"><?php echo $menu->NAME_PROD_TYPE ?></a></li>
                    <?php endforeach ?>
                </ul>

            </li>
        </ul>
    </div>

</section>


<section id="product1" class="section-p1">
    <div class="pro-container">
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
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
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

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
</section>

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
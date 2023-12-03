<section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off!</p>
    <button>Shop now</button>
</section>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="img/features/f1.png" alt="">
        <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
        <img src="img/features/f2.png" alt="">
        <h6>Online Order</h6>
    </div>
    <div class="fe-box">
        <img src="img/features/f3.png" alt="">
        <h6>Save Money</h6>
    </div>
    <div class="fe-box">
        <img src="img/features/f4.png" alt="">
        <h6>Promotions</h6>
    </div>
    <div class="fe-box">
        <img src="img/features/f5.png" alt="">
        <h6>Happy Sell</h6>
    </div>
    <div class="fe-box">
        <img src="img/features/f6.png" alt="">
        <h6>F24/7 Support</h6>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">
        <?php foreach ($top_prod_older as $topoder): ?>
            <div class="pro">
                <a href="index.php?href=details&id_prod=<?php echo $topoder->ID_PRODUCT ?>">
                    <div class="img_home">
                        <img src="../images_prod/<?php echo $topoder->IMAGE ?>" alt="">
                    </div>
                </a>
                <div class="des">
                    <span>Danh mục:
                        <?php echo $topoder->NAME_PROD_TYPE ?>
                    </span>
                    <h5>
                        <?php echo $topoder->NAME_PROD ?>
                    </h5>

                    <div class="flex_price_and_color_prod">
                        <h4>
                            <?php echo number_format($topoder->NEW_PRICE, '0', ',', '.') . 'đ' ?>
                            <del>
                                <?php echo number_format($topoder->OLD_PRICE, '0', ',', '.') . 'đ' ?>
                            </del>
                        </h4>
                        <div class="color_product">
                            <?php foreach ($getallbienthe as $bienthe): ?>
                                 <?php if($topoder->ID_PRODUCT == $bienthe->ID_PRODUCT): ?>
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

<section id="banner" class="section-m1">
    <h4>Repair Service</h4>
    <h2>Up to <span>70% Off</span> 70% Off - All t-Shirts & Accessories</h2>
    <button class="normal">Explore More</button>
</section>

<section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">
        <?php foreach ($top_8 as $get): ?>
            <div class="pro">
                <a href="index.php?href=details&id_prod=<?php echo $get->ID_PRODUCT ?>">
                    <div class="img_home">
                        <img src="../images_prod/<?php echo $get->IMAGE ?>" alt="">
                    </div>
                </a>
                <div class="des">
                    <span>
                        Danh mục:
                        <?php echo $get->NAME_PROD_TYPE ?>
                    </span>
                    <h5>
                        <?php echo $get->NAME_PROD ?>
                    </h5>
                    <div class="flex_price_and_color_prod">
                        <h4>
                            <?php echo number_format($get->NEW_PRICE, '0', ',', '.') . 'đ' ?>

                            <del>
                                <?php echo number_format($get->OLD_PRICE, '0', ',', '.') . 'đ' ?>
                            </del>
                        </h4>
                        <div class="color_product">
                            <?php foreach ($getallbienthe as $bienthe): ?>
                                <?php if ($get->ID_PRODUCT == $bienthe->ID_PRODUCT): ?>

                                    <div class="color_div"
                                        style=" border: 0.4px solid rgb(208, 208, 208); background-color: <?php echo $bienthe->CODE_COLOR ?>;">
                                    </div>

                                <?php endif ?>
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
<style>
    .flex_price_and_color_prod h4 del {
        font-size: 10px;
        color: #a6a6a6;
    }
</style>
<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>byt 1 get 1 free</h2>
        <span>The best classic dress is on sale at cara</span>
        <button class="white">Learn More</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcomming season</h2>
        <span>The best classic dress is on sale at cara</span>
        <button class="white">Collection</button>
    </div>
</section>

<section id="banner3">
    <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection - 50% OFF</h3>
    </div>
    <div class="banner-box banner-box2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring/Summer 2022</h3>
    </div>
    <div class="banner-box banner-box3">
        <h2>T-Sjirts</h2>
        <h3>New Trending Prints</h3>
    </div>
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
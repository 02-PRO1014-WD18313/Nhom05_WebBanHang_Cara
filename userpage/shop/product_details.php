<section id="page-header">
    <h2>#stayhome</h2>
    <p>Save more with coupons & up to 70% off!</p>
</section>

<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <div class="big_img_main">
            <?php foreach ($getallbienthe as $bienthe): ?>
                <?php if ($get_id_prod->ID_PRODUCT == $bienthe->ID_PRODUCT): ?>

                    <img class="img_main" src="../images_prod/<?php echo $bienthe->IMAGE_VARIANT ?>" alt="" id="MainImg">

                <?php endif ?>
            <?php endforeach ?>
        </div>



        <div class="small-img-group">
            <?php foreach ($getallbienthe as $bienthe): ?>
                <?php if ($get_id_prod->ID_PRODUCT == $bienthe->ID_PRODUCT) {
                    $count = 1;
                    $cong += $count;
                    ?>

                    <div class="small-img-col">

                        <img src="../images_prod/<?php echo $bienthe->IMAGE_VARIANT ?>" alt="" class="small-img"
                            onclick="slide_img(<?php echo $cong ?>)">
                    </div>

                <?php } ?>
            <?php endforeach ?>
        </div>
    </div>
    <style>
        .big_price_old_details {
            display: flex;
            align-items: center;
        }

        .big_price_old_details span {
            padding-left: 10px;
        }
    </style>
    <form action="" method="post">
        <div class="single-pro-details">
            <?php if (isset($_GET['shop'])) { ?>
                <h6><a style="text-decoration: none;" href="index.php?href=shop">Shop</a> /
                    <?php echo $get_id_prod->NAME_PROD ?>
                </h6>
            <?php } else { ?>
                <h6><a href="index.php" style="text-decoration: none;">Home</a> /
                    <?php echo $get_id_prod->NAME_PROD ?>
                </h6>
            <?php } ?>
            <h4>
                <?php echo $get_id_prod->NAME_PROD ?>
            </h4>
            <div class="big_price_old_details">
                <h2 id="price">
                    <?php echo number_format($get_id_prod->NEW_PRICE, '0', ',', '.') . "đ" ?>
                </h2>

                <del style=" font-size: 18px;color: #606063; margin-left: 10px;">
                    <?php echo number_format($get_id_prod->OLD_PRICE, '0', ',', '.') . "đ" ?>
                </del>

            </div>

            <select name="choose_size" id="">
                <option>Select Size</option>
                <?php foreach ($getall_size as $size): ?>
                    <option value="<?php echo $size->ID_SIZE ?>">
                        <?php echo $size->NAME_SIZE ?>
                    </option>
                <?php endforeach ?>
            </select>
            <div class="prod_color_details">
                <div class="title_color_prod">
                    <p>Danh mục:
                        <?php echo $get_id_prod->NAME_PROD_TYPE ?>
                    </p>
                    <p>Màu sắc:<span id="innerHTML_color"></span></p>

                </div>
                <div class="home_color_prod">
                    <?php foreach ($getallbienthe as $bienthe): ?>
                        <?php if ($get_id_prod->ID_PRODUCT == $bienthe->ID_PRODUCT): ?>

                            <div class="detail_prod_color" id="color_prod_choose"
                                data-animal-type="<?php echo $bienthe->NAME_COLOR ?>"
                                data-animal="<?php echo number_format($bienthe->PRICE_VARIANT, '0', ',', '.') . "đ" ?>"
                                onclick="showDetails(this,this)">

                                <img src="../images_prod/<?php echo $bienthe->IMAGE_VARIANT ?>" alt="">
                                <input class="choose_color_prod" id="radio_color" type="radio" name="prod_color"
                                    value="<?php echo $bienthe->ID_RELATED_PRODUCT ?>">
                            </div>

                        <?php endif ?>
                    <?php endforeach ?>

                </div>
            </div>
            <p style="color:red;">
                <?php
                if ($check_user == false) {
                    echo "Bạn phải đăng nhập để mua hàng !";
                }
                if ($check_empty == false) {
                    echo "Bạn chưa chọn sản phẩm !";
                }
                ?>
            </p>
            <input type="number" name="quanyty" value="1" min="0" style="border: 1px solid;">

            <button type="submit" class="normal" name="btn_more_cart">Add To Cart</button>

            <h4>Product Details</h4>
            <div class="Content_restrictions" id="content">
                <span id="span"><?php echo $get_id_prod->DESCRIBE ?>. <span id="showws"></span></span>
            </div>

        </div>
    </form>

</section>
<?php
$count = 0;
$getall_com = getall_com();
foreach ($getall_com as $get) {
    if ($get->ID_PRODUCT == $_GET['id_prod']) {
        $count++;
    }
}
if ($count == 0) { ?>
    <p class="check_comment" style=" text-align: center;font-size: 22px;">Sản phẩm chưa có người bình luận.</p>
<?php } else { ?>

    <section id="comment_container">
        <div class="comment">

            <div class="comment_star">
                <div class="comment_content">
                    <h3>Đánh giá và nhận xét sản phẩm 
                  
                    </h3>
                    <p>( <?php echo $count ?>)</p>
                </div>
                <div class="star_comment">
                 
                    <box-icon type='solid' name='star'></box-icon>
                    <box-icon type='solid' name='star'></box-icon>
                    <box-icon type='solid' name='star'></box-icon>
                    <box-icon type='solid' name='star'></box-icon>
                    <box-icon type='solid' name='star'></box-icon>
                </div>

            </div>

            <div class="comment_box">
                <div>
                    <a href="index.php?href=details&id_prod=<?php echo $get_id_prod->ID_PRODUCT ?>" class="normal">Tất cả</a>
                </div>
                <div>
                    <a href="index.php?href=details&id_prod=<?php echo $get_id_prod->ID_PRODUCT ?>&star=5" class="normal">5
                        sao</a>
                </div>
                <div>
                    <a href="index.php?href=details&id_prod=<?php echo $get_id_prod->ID_PRODUCT ?>&star=4" class="normal">4
                        sao</a>
                </div>
                <div>
                    <a href="index.php?href=details&id_prod=<?php echo $get_id_prod->ID_PRODUCT ?>&star=3" class="normal">3
                        sao</a>
                </div>
                <div>
                    <a href="index.php?href=details&id_prod=<?php echo $get_id_prod->ID_PRODUCT ?>&star=2" class="normal">2
                        sao</a>
                </div>
                <div>
                    <a href="index.php?href=details&id_prod=<?php echo $get_id_prod->ID_PRODUCT ?>&star=1" class="normal">1
                        sao</a>
                </div>

            </div>

        </div>

        <div class="comment_evaluate">

            <div class="people">
                <?php foreach ($getid_comment as $comment): ?>
                    <div class="content_user">
                        <div class="title_user">

                            <img style="border-radius: 50%;" src="img/people/avatar-trang-2.jpg" alt="">

                            <div class="flex_title_user">
                                <p><span>
                                        <?php echo $comment->NAME_USER ?>
                                    </span> </p>
                                <p>
                                    <?php echo $comment->DATE_COMENT ?>
                                </p>
                                <div class="start">
                                    <?php for ($i = 1; $i <= $comment->STAR; $i++) {
                                        ?>

                                        <br><i style="  color: rgb(255, 191, 0);" class='bx bxs-star'></i>

                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                        <br>
                        <p>
                            <?php echo $comment->COMMENTARY_CONTENT ?>
                        </p>
                    </div>
                <?php endforeach ?>

            </div>
        </div>

    </section>

<?php } ?>

<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">
        <?php foreach ($prod_peatured as $prod_peat): ?>
            <div class="pro">

                <a href="index.php?href=details&id_prod=<?php echo $prod_peat->ID_PRODUCT ?>&shop">
                    <div class="img_home">
                        <img src="../images_prod/<?php echo $prod_peat->IMAGE ?>" alt="">
                    </div>
                </a>

                <div class="des">
                    <span>Danh mục:
                        <?php echo $prod_peat->NAME_PROD_TYPE ?>
                    </span>
                    <h5>
                        <?php echo $prod_peat->NAME_PROD ?>
                    </h5>
                    <div class="flex_price_and_color_prod">
                        <h4>
                            <?php echo number_format($prod_peat->NEW_PRICE, '0', ',', '.') . 'đ' ?>

                            <del>
                                <?php echo number_format($prod_peat->OLD_PRICE, '0', ',', '.') . 'đ' ?>
                            </del>
                        </h4>
                        <div class="color_product">
                            <?php foreach ($getallbienthe as $bienthe): ?>
                                <?php if ($bienthe->ID_PRODUCT == $prod_peat->ID_PRODUCT): ?>
                                    <div class="color_div" style="background-color: <?php echo $bienthe->CODE_COLOR ?>;"></div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach ?>
    </div>

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
<script src="javasctip/js_details.js"></script>
<script src="javasctip/slideshow.js"></script>
<div class="page_manager">
    <div class="number_of_parts">
        <div class="block_parts">
            <div class="product_block">
                <div class="text_block_parts">
                    <h4>
                        <?php echo $count ?>
                    </h4>
                    <p>Product</p>
                </div>

                <i class='bx bx-food-menu'></i>
            </div>
            <div class="view_block">
                <div class="text_block_parts">
                    <h4>
                        <?php echo $count_view_older; ?>
                    </h4>
                    <p>Views</p>
                </div>

                <i class="fa-regular fa-eye"></i>
            </div>
            <div class="coment_block">
                <div class="text_block_parts">
                    <h4>
                        <?php echo $count_comment ?>
                    </h4>
                    <p>Coment</p>
                </div>

                <i class="fa-regular fa-comments"></i>
            </div>
            <div class="order_block">
                <div class="text_block_parts">
                    <h4>
                        <?php echo $count_order; ?>
                    </h4>
                    <p>Order</p>
                </div>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
    </div>
    <div class="chart_stastiscal">

        <div class="chart_box1">
            <div id="piechart"></div>
        </div>
        <div class="chart_box2"><canvas id="myChart2" style="width: 100px; height: 20px;"></canvas></div>
    </div>
    <div class="bag_big_page_manager">
        <div class="table_page_manager_statistical">
            <table class="table_manager_statistical">
                <thead>
                    <tr>
                        <th>Mã hàng</th>
                        <th style="width: 230px;" >Sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Số hàng đã bán</th>
                        <th></th>
                        <th></th>
                        <th></th>
         
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($prod_view_order as $view): ?>
                        <tr>
                            <td>
                                <?php echo $view->CODE_PROD ?>
                            </td>
                            <td style="display:flex; width: 230px;" >
                                <img width="80px" src="../images_prod/<?php echo $view->IMAGE ?>" alt="">
                                <div class="flex_name_prod">
                                    <p><?php echo $view->NAME_PROD ?></p>
                                </div>
                            </td>
                            <td>
                                <?php echo $view->NAME_PROD_TYPE ?>
                            </td>
                            <td>
                                <?php echo $view->NUMBER_OF_ORDERS ?>
                            </td>
                            <td></td>
                            <td></td>
                        

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
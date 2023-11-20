      <form action="" class="form">
            <div class="bag_big_page_manager">
                <div class="table_page_manager_statistical">

                    <table class="table_manager_statistical">
                        <thead>
                            <tr>
                                <th>Mã hàng</th>
                                <th>Hàng hóa</th>
                                <th>Số bình luận</th>
                                <th>Mới nhất</th>
                                <th>Cũ nhất</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($getall_comment as $get): ?>
                            <tr>
                                <td><?php echo $get->CODE_PROD ?></td>
                                <td><?php echo $get->NAME_PROD ?></td>
                                <td><?php echo $get->count_coment_prod ?></td>
                                <td><?php echo $get->min_date ?></td>
                                <td><?php echo $get->max_date ?></td>
                                <td>
                                    <div class="hanhdong"> 
                                        <a href="index.php?act=comment&group_coment=<?php echo $get->ID_PRODUCT ?>">Chi tiết</a>
                                    </div>

                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>

                    </table>
                </div>
                <div class="chose">
                    <div class="flex_chose">
                    </div>

                </div>
            </div>
        </form>

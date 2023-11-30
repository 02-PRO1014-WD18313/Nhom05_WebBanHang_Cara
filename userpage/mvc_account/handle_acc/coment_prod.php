<div class="controller_comment_prod">
    <div class="comment_prod_id">
        <div class="illustration">

            <img src="../images_prod/<?php echo $getid_variant->IMAGE_VARIANT ?>" alt="">
            <div class="p_name_prod">
                <p>
                    <?php echo $comment_prod->NAME_PROD ?>
                </p>
                <span>Phân loại:
                    <?php echo $getid_variant->NAME_COLOR ?>
                </span>
            </div>

        </div>
        <form action="" method="post" class="form_comment">
            <input type="text" name="id_user" hidden value="<?php echo $account->ID_KH ?>">
            <label for="">Người bình luận</label>
            <input type="text" value="<?php echo $account->NAME_USER ?>">
            <label for="">Nội dung bình luận</label>
            <textarea name="comment_content" id="" cols="30" rows="10"></textarea>
            <div class="btn_comment">
                <button name="btn_comment" type="submit" >Bình luận</button>
            </div>

        </form>
    </div>
</div>
<style>
    .delete_choose_oder a {
        padding: 10px 15px;
        background-color: rgb(255, 124, 124);
        color: #ffffff;
    }
</style>
<!-- test -->
<form action="" class="form" id="form_older">
    <div class="delete_choose_oder" onclick="delete__older()">
        <a>
            <i class='bx bx-trash'></i>
            Xóa mục chọn
        </a>
    </div>

    <div class="bag_big_page_manager">
        <div class="table_page_manager_statistical">

            <table class="table_manager_statistical">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="select_older" onclick="selectall_older()"></th>
                        <th>Mã</th>
                        <th>Khách hàng</th>
                        <th>Trạng thái</th>
                        <th>Thanh toán</th>
                        <th>Ngày tạo</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>

                <tbody>
                    <tr id="box2">
                        <td><input type="checkbox" name="checkbox[]" id="2" value="2"></td>
                        <td><a class="code_order" href="index.php?act=older&detal_older">#29279</a></td>
                        <td>áo</td>
                        <td>20</td>
                        <td>22-11-11</td>
                        <td>11</td>
                        <td>1.000.000đ</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</form>
<script>

    function selectall_older() {
        if ($('#select_older').prop("checked")) {
            $('input[type=checkbox]').each(function () {
                console.log(this.id)
                jQuery('#' + this.id).prop('checked', true);
            })
        } else {
            $('input[type=checkbox]').each(function () {
                jQuery('#' + this.id).prop('checked', false);
            })
        }
    }

    function delete__older() {

        $.ajax({
            url: '/du_an_1/admin/index.php?act=older',
            type: 'post',
            data: $('#form_older').serialize(),
            success: function () {
                $('input[type=checkbox]').each(function () {
                    if (jQuery('#' + this.id).prop('checked')) {
                        swal({
                            title: "Xóa thành công",
                            button: "ok",
                        });
                        $('#box' + this.id).remove();
                    }
                });
            }
        })
    }
</script>
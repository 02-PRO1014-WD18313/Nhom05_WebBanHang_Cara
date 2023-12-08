<?php 
//  include "../controller/controller_admin/controller_login_admin.php";
session_start();
include "../moder/pdo.php";
$check_admin="";
if (isset($_POST['btn_login_admin'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $login_admin = login($email, $pass);
    if ($login_admin == true) {
        if ($login_admin->STATUS == 1) {
            header("location:index.php");
            $_SESSION['admin']=$login_admin;
        }else{
          $check_admin="Tài khoản này không được phân quyền";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="controller_body_lodin_admin">
        <div class="controller_login_admin">
            <div class="login_admin">
                <div class="form_login_admin">
                    <div class="title_admin">
                        <h3>Login Admin</h3>
                    </div>
                    <form action="" method="post" class="form_login">
                        <input type="email" name="email" id="" placeholder="Email"><br>
                        <input type="password" name="pass" placeholder="Password">
                        <p><?php echo $check_admin ?></p>
                        <button name="btn_login_admin" >Đăng nhập</button>
                    </form>
                </div>

                <img src="image/pexels-david-bartus-615003.jpg" alt="">

            </div>
        </div>
    </div>
<style>
    /* CSS trang đăng nhập admin */
.controller_body_lodin_admin{
    position: relative;
width: 100vh;
}
.controller_login_admin{
   position: absolute;
   top: 100px;
   left: 50% ;
}
.login_admin{
    display: flex;
    width: 700px;
    height: auto;
    border-radius: 10px;
    overflow: hidden;
    justify-content: space-between;
    box-shadow: 1px 2px 8px 8px rgba(182, 182, 182, 0.2);
}
.form_login_admin{
    display: flex;
    align-items: center;
    flex-direction: column;
    width: 65%;
}
.form_login{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.title_admin{
    margin: 20px 0px;
}
.form_login input{
  border: 1px solid rgb(138, 138, 138);
  padding: 13px 0px;
  padding-right: 100px;
  padding-left: 10px;
  border-radius: 15px;
  margin: 10px 0px;
  font-size: 17px;
}
.form_login button{
 padding: 10px 40px;
 background: rgb(23, 104, 106);
 border-radius: 13px;
 margin-top: 10px;
 color: #ffffff;
 font-size: 15px;
}
.login_admin img{
    width: 35%;
    height: 400px;
}
</style>
</body>

</html>
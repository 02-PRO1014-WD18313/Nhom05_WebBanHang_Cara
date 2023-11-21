<?php 
if(isset($_POST['seach_user'])){
    $kyw_name_user=$_POST['keyword_name_user'];
}else{
    $kyw_name_user="";
}
$getall_user=getall_user($kyw_name_user);
 if(isset($_POST['checkbox'][0])){
    foreach ($_POST['checkbox'] as $dele_user){
        delete_user($dele_user);
       echo $dele_user;
    }
 }
?>
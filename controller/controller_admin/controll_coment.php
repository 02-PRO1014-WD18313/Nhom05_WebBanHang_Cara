<?php 
  $getall_comment=getall_coment();
  if(isset($_GET['group_coment'])){
    $slec_coment_idprod=slec_coment_idprod($_GET['group_coment']);
    $getid_prod=getid_prod($_GET['group_coment']);
  }
  if(isset($_POST['checkbox'][0])){
     foreach($_POST['checkbox'] as $list){
        del_comment($list);
     }
  }
?>
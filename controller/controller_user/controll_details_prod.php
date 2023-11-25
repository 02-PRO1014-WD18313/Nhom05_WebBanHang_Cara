<?php
if (isset($_GET['id_prod'])) {
    $get_id_prod = get_prod_id($_GET['id_prod']);
}
$getall_size = getall_size();
$getallbienthe = getall_bienthe();
$cong = 0;

$prod_peatured=prod_peatured($get_id_prod->ID_PROD_TYPE);

?>
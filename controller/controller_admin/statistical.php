<?php
$count_prod = count_prod();
$count = count($count_prod);
$getall_coment = getall_com();
$count_comment = count($getall_coment);
$count_view_older = 0;
foreach ($count_prod as $view_order) {
    $count_view_older += $view_order->NUMBER_OF_ORDERS;
}
$getall_older = getall_older();
$count_order = count($getall_older);
// foreach (count_prod() as $chart_order_prod) {
//     $check = $chart_order_prod->NUMBER_OF_ORDERS;
//     echo "'" . $check . "',";
// }
$prod_view_order=prod_view_order();
?>
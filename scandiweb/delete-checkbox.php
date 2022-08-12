<?php

include_once("model/DbConfig.php");

$sku = $_GET['sku'];
$productValueQuery = "DELETE FROM product_value WHERE sku IN $sku";
$productQuery = "DELETE FROM product WHERE sku IN $sku";
$productValueResult = $connection->query($productValueQuery);
$productQueryResult = $connection->query($productQuery);
$res=0;
if ($productValueResult == false &&  $productQueryResult == false ) {
    $res=0;
    echo json_encode($res);
} else {
    $res=1;
    echo json_encode($res);
}

?>


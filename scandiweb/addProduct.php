<?php

include_once("model/DbConfig.php");

$sku = $_POST['sku'];	
$name = $_POST['name'];
$price = $_POST['price'];
$type=$_POST['type'];
$attributeValue=$_POST['attributeValue'];

$insertProductQuery = $connection->query("INSERT INTO product (sku,product_name,price,type_id)
VALUES ('$sku', '$name','$price' ,'$type')");

$insertProductValueQuery = $connection->query("INSERT INTO product_value (sku,attribute_type_id,value)
VALUES ('$sku','$type','$attributeValue')");

$res=0;
if ($insertProductQuery == false &&  $insertProductValueQuery == false ) {
    $res=0;
    echo json_encode($res);
} else {
    $res=1;
    echo json_encode($res);
}
?>


<?php

   include_once("model/DbConfig.php");
	$query="SELECT * FROM product
    INNER JOIN attribute_type ON product.type_id = attribute_type.attribute_type_id
    INNER JOIN product_value ON product.sku = product_value.sku";

    $result = $connection->query($query);
		
    $rows = array();
    
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    
    echo json_encode($rows);
?>

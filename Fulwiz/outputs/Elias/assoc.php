<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $product_info = array(
        "Product Code" => "001",
        "Product" => "LG TV 50",
        "Price" => 23000,
        "Brand" => "LG",
        "Stock" => 5
    );
    foreach($product_info as $key => $values){
        if (is_numeric($values)){
            $values = number_format($values);
        }
        echo $key . ": " . $values . "<br/>";
    }
        ?>  
</body>
</html>
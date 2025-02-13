<?php
$products = array(
    "name" => "water",
    "price" => 2
);
array(
    "name" => "soda",
    "price" => 3.5
);

function total_price($products){
    $sum = 0;
    foreach($products as $product){
        $sum = $product["price"];
    }
        return $sum;
};
total_price($products);
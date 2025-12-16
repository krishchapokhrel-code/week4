<?php
$data = file_get_contents(__DIR__ . "/products.json");
$products = json_decode($data, true);

foreach ($products as $product) {
    echo $product['name'] . " - " . $product['price'] . "<br>";
}
?>

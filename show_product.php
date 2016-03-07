<?php
// show_product.php <id>
require_once "bootstrap.php";

$id = $argv[1];
$product = $entityManager->find(Test\Product::class, $id);

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());

<?php
// list_products.php
require_once "bootstrap.php";

$productRepository = $entityManager->getRepository(Test\Product::class);
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}

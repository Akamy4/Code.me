<?php
require_once('Product.php');

$product1 = new Product('Moloko', 500);

$product2 = $product1;

echo "Продукт1: " . $product1->getName() . ' ' . $product1->getPrice() . '<br>' .
  "Продукт2: " . $product2->getName() . ' ' . $product2->getPrice() . '<br>';

$product1 = 1;
echo "Продукт1: " . $product1->getName() . ' ' . $product1->getPrice() . '<br>' .
  "Продукт2: " . $product2->getName() . ' ' . $product2->getPrice() . '<br>';

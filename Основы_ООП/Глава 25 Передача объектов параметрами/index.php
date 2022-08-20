<?php
require_once('EmployeeCollection.php');
require_once('Cart.php');

$emp1 = new Employee('Akame', 3000);
$emp2 = new Employee('Rei', 4000);
$emp3 = new Employee('Asuka', 5000);

$collection = new EmployeeCollection;

$collection->add($emp1);
$collection->add($emp2);
$collection->add($emp3);

echo 'Всего работников: ' . $collection->count() . ' Вся зарплата: ' . $collection->getTotalSalary() . '<br>';
var_dump($collection->get());

echo '<br>';

$prod1 = new Product('Moloko', 30, 10);
$prod2 = new Product('Cola', 20, 10);

$cart = new Cart;

$cart->add($prod1);
$cart->add($prod2);

echo 'Total_Cost: ' . $cart->getTotalCost() . ' Total_Quantity: ' . $cart->getTotalQuantity() . ' AvgPrice: ' . $cart->getAvgPrice() . '<br>';
echo '<pre>';
print_r($cart->get());
$cart->remove($prod1);
echo '<pre>';
print_r($cart->get('Moloko'));

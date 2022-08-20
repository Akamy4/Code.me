<?php
require_once('Product.php');

class Cart
{
  private $products = [];

  public function add($product)
  {
    $this->products[] = $product;
  }

  public function remove($name)
  {
    foreach ($this->products as $key => $product) {
      if ($product == $name) {
        unset($this->products[$key]);
      }
    }
  }

  public function get()
  {
    return $this->products;
  }

  public function getTotalCost()
  {

    $sum = 0;
    foreach ($this->products as $product) {
      $sum += $product->getPrice() * $product->getQuantity();
    }
    return $sum;
  }

  public function getTotalQuantity()
  {
    $sum = 0;
    foreach ($this->products as $product) {
      $sum += $product->getQuantity();
    }
    return $sum;
  }

  public function getAvgPrice()
  {
    $sum = 0;
    $c = 0;
    foreach ($this->products as $product) {
      $sum += $product->getPrice();
      $c++;
    }
    return $sum / $c;
  }
}

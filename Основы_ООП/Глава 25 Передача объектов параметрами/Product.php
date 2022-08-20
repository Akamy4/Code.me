<?php
class Product
{
  private $name;
  private $price;
  private $quntity;

  public function __construct($name, $price, $quntity)
  {
    $this->name = $name;
    $this->price = $price;
    $this->quntity = $quntity;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getQuantity()
  {
    return $this->quntity;
  }

  public function getCost($quntity)
  {
    $sum = 0;
    $c = 0;
    foreach ($quntity as $n) {
      $c++;
      $sum += $n;
    }
    return $sum * $c;
  }
}

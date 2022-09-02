<?php
abstract class User
{
  private $name;
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  abstract protected function increaseRevenue($value);
  abstract protected function decreaseRevenue ($value);
}

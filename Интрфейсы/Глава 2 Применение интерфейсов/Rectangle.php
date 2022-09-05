<?php

require_once('iFigure.php');

class Rectangle implements iFigure
{
  private $a;
  private $b;

  public function __construct($a, $b)
  {
    $this->a = $a;
    $this->b = $b;
  }

  public function getSquare()
  {
    return $this->a * $this->b;
  }

  public function getPerimeter()
  {
    return 2 * ($this->a + $this->b);
  }
}

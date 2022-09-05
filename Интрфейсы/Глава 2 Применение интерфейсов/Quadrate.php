<?php

require_once('iFigure.php');

class Quadrate implements iFigure
{
  private $a;

  public function __construct($a)
  {
    $this->a = $a;
  }

  public function getSquare()
  {
    return $this->a * $this->a;
  }

  public function getPerimeter()
  {
    return 4 * $this->a;
  }
}

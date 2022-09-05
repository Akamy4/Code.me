<?php
require_once('iCube.php');

class Cube implements iCube
{
  private $a;

  public function __construct($a)
  {
    $this->a = $a;
  }

  public function volume()
  {
    return 6 * $this->a;
  }

  public function surface_area()
  {
    return 6 * pow($this->a, 2);
  }
}

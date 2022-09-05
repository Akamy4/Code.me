<?php
require_once('iFigure3d.php');

class Cube implements iFigure3d
{
  private $a;

  public function __construct($a)
  {
    $this->a = $a;
  }

  public function getVolume()
  {
    return 6 * $this->a;
  }

  public function getSurfaceSquare()
  {
    return 6 * pow($this->a, 2);
  }
}

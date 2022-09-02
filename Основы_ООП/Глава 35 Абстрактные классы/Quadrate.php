<?php

require_once('Figure.php');

class Quadrate extends Figure
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

  public function getPerimetr()
  {
    return 4 * $this->a;
  }

}

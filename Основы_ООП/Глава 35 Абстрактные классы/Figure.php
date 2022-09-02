<?php

abstract class Figure
{

  abstract public function getSquare();
  abstract public function getPerimetr();
  public function getSquarePerimeterSum()
  {
    return $this->getSquare() + $this->getPerimetr();
  }
}

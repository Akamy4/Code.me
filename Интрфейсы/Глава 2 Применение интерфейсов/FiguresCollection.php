<?php
class FiguresCollection
{

  private $figures = [];

  public function addFigure($figures)
  {
    $this->figures[] = $figures;
  }

  public function getTotalSquare()
  {
    $sum = 0;

    foreach ($this->figures as $figure) {
      $sum += $figure->getSquare();
    }

    return $sum;
  }

  public function getTotalPerimeter()
  {
    $sum = 0;

    foreach ($this->figures as $figure) {
      $sum += $figure->getPerimeter();
    }

    return $sum;
  }
}

<?php
class Rectangle
{
  public $height;
  public $width;

  public function getSquare()
  {
    return $this->height * $this->width;
  }

  public function getPerimeter()
  {
    return 2 * ($this->height + $this->width);
  }
}

$obj = new Rectangle;
$obj->height = 5;
$obj->width = 7;

echo $obj->getSquare() . "<br>";
echo $obj->getPerimeter();

<?php
require_once('Rectangle.php');
require_once('Disk.php');

$rectangle = new Rectangle(4, 5);
echo $rectangle->getSquare() . " " . $rectangle->getPerimeter() . " " . $rectangle->getA() . " " . $rectangle->getB() . " " . $rectangle->getC() . " " . $rectangle->getD();
echo "<br>";
$circle = new Disk(3);
echo $circle->getSquare() . " " . $circle->getPerimeter() . " " . $circle->getRadius() . " " . $circle->getDiameter();

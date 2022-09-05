<?php
require_once('Cube.php');
require_once('Quadrate.php');
require_once('Rectangle.php');

$cube1 = new Cube(1);
$cube2 = new Cube(2);
$cube3 = new Cube(3);

$quadrate1 = new Quadrate(4);
$quadrate2 = new Quadrate(5);
$quadrate3 = new Quadrate(6);

$rectangle1 = new Rectangle(3, 4);
$rectangle2 = new Rectangle(4, 5);
$rectangle3 = new Rectangle(5, 6);

$arr[] = $cube1;
$arr[] = $cube2;
$arr[] = $cube3;
$arr[] = $quadrate1;
$arr[] = $quadrate2;
$arr[] = $quadrate3;
$arr[] = $rectangle1;
$arr[] = $rectangle2;
$arr[] = $rectangle3;

foreach ($arr as $elem) {
  echo ($elem instanceof Cube) ? "true <br>" : "false <br>";
}

echo '<br><br>';

foreach ($arr as $elem) {
  echo ($elem instanceof iFigure3d) ? "true <br>" : "false <br>";
}

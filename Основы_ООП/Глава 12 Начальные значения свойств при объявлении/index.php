<?php
require_once('Arr.php');
$arr = new Arr;

$num1 = [1, 2, 3];
$num2 = [4, 5, 6];
$arr->add($num1);
$arr->add($num2);
$arr->add([7, 8, 9]);
echo $arr->getAvg();

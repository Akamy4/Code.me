<?php
require_once('Arr.php');

$arr = new Arr();

$arr->add(1);
$arr->add(2);
$arr->add(3);
$arr->add(4);

echo $arr->getSum23() . '<br>';
echo $arr->getAvgMeanSum() . '<br>';

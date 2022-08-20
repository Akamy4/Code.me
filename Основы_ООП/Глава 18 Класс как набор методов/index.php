<?php
require_once('ArraySumHelper.php');


$arraySumHelper = new ArraySumHelper;

$arr = [1, 2, 3];
echo $arraySumHelper->getAvg1($arr) . '<br>';
echo $arraySumHelper->getAvg2($arr) . '<br>';
echo $arraySumHelper->getAvg3($arr) . '<br>';
echo $arraySumHelper->getAvg4($arr) . '<br>';

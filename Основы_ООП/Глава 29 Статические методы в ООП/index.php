<?php
require_once('ArraySumHelper.php');

$ArraySumHelper = new ArraySumHelper;

$arr = [1, 2, 3, 4, 5, 6];

echo ArraySumHelper::getSum1($arr) . '<br>';
echo ArraySumHelper::getSum2($arr) . '<br>';
echo ArraySumHelper::getSum3($arr) . '<br>';
echo ArraySumHelper::getSum4($arr) . '<br>';

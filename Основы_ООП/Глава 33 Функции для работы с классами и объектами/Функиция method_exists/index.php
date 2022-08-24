<?php
require_once('Test.php');

$test = new Test;

echo method_exists($test, 'method1') . '<br>';
var_dump(method_exists($test, 'method2'));
echo '<br>';

//index.php?check_c=Test&check_m=method1
$check_c = $_GET['check_c'];
$check_m = $_GET['check_m'];
if (var_dump(class_exists($check_c))) {
  var_dump(method_exists($check_c, 'method2'));
}

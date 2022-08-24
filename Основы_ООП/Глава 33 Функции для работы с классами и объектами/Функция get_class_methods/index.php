<?php
require_once('Test.php');

$test = new Test("Rei");
echo '<pre>';
print_r(get_class_methods($test));
echo '<br><br>';

echo '<pre>';
print_r(get_class_methods('Test'));
echo '<br><br>';

$arr = get_class_methods($test);

foreach ($arr as $elem) {
  echo $elem . "<br>";
}

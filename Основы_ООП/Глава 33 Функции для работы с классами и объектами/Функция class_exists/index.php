<?php
require_once('Test1.php');
require_once('Test2.php');

echo class_exists('Test1') . "<br>";
echo class_exists('Test2') . "<br>";

//http://localhost:8080/code.me/%D0%9E%D1%81%D0%BD%D0%BE%D0%B2%D1%8B_%D0%9E%D0%9E%D0%9F/%D0%93%D0%BB%D0%B0%D0%B2%D0%B0%2033%20%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%B8%20%D0%B4%D0%BB%D1%8F%20%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%8B%20%D1%81%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0%D0%BC%D0%B8%20%D0%B8%20%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%B0%D0%BC%D0%B8/%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D1%8F%20class_exists/index.php?arg1=test3
$test = $_GET['arg1'];
if (class_exists($test)) {
  echo 1;
} else {
  echo 0;
}

<?php
require_once('Test1.php');

echo class_exists('Test1') . '<br>';
var_dump(class_exists('Test2'));
echo '<br>';

//index.php?check=Test2
$check = $_GET['check'];
var_dump(class_exists($check));

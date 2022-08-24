<?php
require_once('ChildClass.php');

$obj = new ChildClass;

var_dump(is_a($obj, 'ChildClass'));
var_dump(is_a($obj, 'ParentClass'));

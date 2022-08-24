<?php
require_once('ChildClass.php');

var_dump(is_subclass_of('ChildClass', 'GrandParentClass'));
var_dump(is_subclass_of('ParentClass', 'GrandParentClass'));
var_dump(is_subclass_of('ChildClass', 'ParentClass'));

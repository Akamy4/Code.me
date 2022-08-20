<?php
require_once('Arr.php');

echo (new Arr)->add(1)->add(2)->push([3, 4])->getSum();

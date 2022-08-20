<?php
require_once('User.php');

$user = new User('Akame', 20);

$methods = [
  'method1' => 'getName',
  'method2' => 'getAge'
];

echo $user->{$methods['method1']}() . ' ' . $user->{$methods['method2']}();

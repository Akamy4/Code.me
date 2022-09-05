<?php
require_once('User.php');

$user = new User;

$user->setName('Rei');
$user->setAge(14);

echo $user->getName() . ' ' . $user->getAge();

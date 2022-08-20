<?php
require_once('User.php');

$user1 = new User('user1');
echo User::getCount() . '<br>';

$user2 = new User('user2');
echo User::getCount();

<?php
require_once('City.php');
require_once('User.php');

$city = new City('Almaty', 1854, 1.232);
$user = new User('Иванов', 'Иван', 'Иванович');

$props_city = ['name', 'foundation', 'population'];
$props_user = ['surname', 'name', 'patronymic'];

foreach ($props_city as $prop) {
  echo $city->$prop . " ";
}
echo '<br>';
echo $user->{$props_user[0]} . " ";
echo $user->{$props_user[1]} . " ";
echo $user->{$props_user[2]};
echo '<br>';
